<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class AgendamentoAction extends Controller{

	/**
	* Listagem de todas salas disponíveis para agendamento
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function index($request, $response)
	{
		return $this->view->render($response, 'home/agendamento/index.twig', [
			'salas' => $this->consulta->buscaTodos('Salas'),
		]);
	}

	/**
	* Visualização do calendário de acordo com o id da sala
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @param  [type] $args     [description]
	* @return [type]           [description]
	*/
	public function showCalendar($request, $response, $args)
	{
		$sala = $this->consulta->buscaUm('Salas', $args['id']);
		$agendamentos = $this->consulta->buscaAgendamentoPorSala($sala);
		return $this->view->render($response, 'home/agendamento/show.twig', [
			'agendamentos' => $agendamentos,
		]);
	}

	/**
	* Formulário para agendamento da sala
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function showAgendarSala($request, $response)
	{
		return $this->view->render($response, 'home/agendamento/agendar.twig', [
			'salas' => $this->consulta->buscaTodos('Salas'),
		]);
	}

	/**
	* Armazena os dados vindos do formulário de agendamento da sala
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function store($request, $response)
	{

		/**
		* Verificação se já existe agendamento baseado no periodo e sala
		* @var [type]
		*/
		if($this->consulta->buscaAgendamentoPorData($request->getParam('periodo_inicial'), $request->getParam('sala'))){
			$this->flash->addMessage('danger', 'Já existe agendamento neste horário para esta sala!');
			return $response->withRedirect($this->router->pathFor('home.agendamento.agendar'));
		}

		$date = new \DateTime(str_replace('/', '-', $request->getParam('periodo_inicial')));
		$date->modify('+1 hour');
		$dataFinal = $date->format('d-m-Y H:i');

		$sala = $this->consulta->buscaUm('Salas', $request->getParam('sala'));
		$user = $this->consulta->buscaPorEmail($request->getParam('email_user'));
		$agendamento = $this->resource->loadEntity('Agendamentos');
		$agendamento->setPeriodoInicial($request->getParam('periodo_inicial'));
		$agendamento->setPeriodoFinal($dataFinal);
		$agendamento->setIdSala($sala);
		$agendamento->setIdUsuario($user);
		$this->resource->insert($agendamento);


		$this->flash->addMessage('success', 'Agendamento realizado com sucesso!');
		return $response->withRedirect($this->router->pathFor('home.agendamento.show'));
	}

	/**
	* Edição de agendamento
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @param  [type] $args     [description]
	* @return [type]           [description]
	*/
	public function edit($request, $response, $args)
	{
		$agendamento = $this->consulta->buscaUm('Agendamentos', $args['id']);
		$user = $this->consulta->buscaPorEmail($this->session->get('userSession'));

		/**
		* Bloqueado acesso a edição de agendamento que não são do usuario reservante
		* @var [type]
		*/
		if($agendamento->getIdUsuario()->getId() != $user->getId()){
			$this->flash->addMessage('danger', 'Você não pode editar os agendamentos de outras pessoas!');
			return $response->withRedirect($this->router->pathFor('home.agendamento.show'));
		}

		return $this->view->render($response, 'home/agendamento/edit.twig', [
			'agendamento' => $agendamento,
			'salas' => $this->consulta->buscaTodos('Salas'),
		]);
	}

	/**
	* Removação de um agendamento
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function destroy($request, $response)
	{
		$agendamento = $this->consulta->buscaUm('Agendamentos', $request->getParam('id_agendamento'));
		$this->resource->delete($agendamento);
		$this->flash->addMessage('success', 'Agendamento excluido com sucesso!!');
		return $response->withRedirect($this->router->pathFor('home.agendamento.show'));
	}

	/**
	* Atualização do agendamento
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function update($request, $response)
	{
		/**
		* Necessário remover o periodo anterior, senão irá cair no metodo abaixo e será
		* informado que este horario já esta agendado, com isso removo o horario previamente marcado
		* verifico se nao esta tentando marcar em horario de outro usuario e cadastro
		* @var [type]
		*/
		$periodo = $this->consulta->buscaUm('Agendamentos', $request->getParam('id_agendamento'));
		$this->resource->delete($periodo);

		/**
		* Verificação se já existe agendamento neste novo horário que deseja agendar
		* @var [type]
		*/
		if($this->consulta->buscaAgendamentoPorData($request->getParam('periodo_inicial'), $request->getParam('sala'))){
			$this->flash->addMessage('danger', 'Já existe agendamento neste horário para esta sala!');
			return $response->withRedirect($this->router->pathFor('home.agendamento.agendar'));
		}

		$date = new \DateTime(str_replace('/', '-', $request->getParam('periodo_inicial')));
		$date->modify('+1 hour');
		$dataFinal = $date->format('d-m-Y H:i');

		$sala = $this->consulta->buscaUm('Salas', $request->getParam('sala'));
		$user = $this->consulta->buscaPorEmail($request->getParam('email_user'));
		$agendamento = $this->resource->loadEntity('Agendamentos');
		$agendamento->setPeriodoInicial($request->getParam('periodo_inicial'));
		$agendamento->setPeriodoFinal($dataFinal);
		$agendamento->setIdSala($sala);
		$agendamento->setIdUsuario($user);
		$this->resource->insert($agendamento);


		$this->flash->addMessage('success', 'Agendamento atualizado com sucesso!');
		return $response->withRedirect($this->router->pathFor('home.agendamento.show'));

	}

	/**
	* Listagem de agendar por usuário
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function agendamentos($request, $response)
	{
		$user = $this->consulta->buscaPorEmail($this->session->get('userSession'));
		$agendamentos = $this->consulta->buscaAgendamentoPorUsuario($user);
		return $this->view->render($response, 'home/agendamento/agendamentos.twig', [
			'agendamentos' => $agendamentos,
		]);
	}

}
