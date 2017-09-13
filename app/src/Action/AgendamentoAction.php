<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class AgendamentoAction extends Controller{

		/**
		 * Display a listing of the resource.
		 * GET
		 */
		public function index($request, $response)
	  {
			return $this->view->render($response, 'home/agendamento/index.twig', [
				'salas' => $this->consulta->buscaTodos('Salas'),
			]);
	  }

		public function showCalendar($request, $response, $args)
		{
			$sala = $this->consulta->buscaUm('Salas', $args['id']);
			$agendamentos = $this->consulta->buscaAgendamentoPorSala($sala);
			return $this->view->render($response, 'home/agendamento/show.twig', [
				'agendamentos' => $agendamentos,
			]);
		}

		public function showAgendarSala($request, $response)
		{
			return $this->view->render($response, 'home/agendamento/agendar.twig', [
				'salas' => $this->consulta->buscaTodos('Salas'),
			]);
		}

		public function store($request, $response)
		{

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

		public function edit($request, $response, $args)
		{
			$agendamento = $this->consulta->buscaUm('Agendamentos', $args['id']);
			$user = $this->consulta->buscaPorEmail($this->session->get('userSession'));

			if($agendamento->getIdUsuario()->getId() != $user->getId()){
				$this->flash->addMessage('danger', 'Você não pode editar os agendamentos de outras pessoas!');
				return $response->withRedirect($this->router->pathFor('home.agendamento.show'));
			}

			return $this->view->render($response, 'home/agendamento/edit.twig', [
				'agendamento' => $agendamento,
				'salas' => $this->consulta->buscaTodos('Salas'),
			]);
		}

		public function destroy($request, $response)
		{
			$agendamento = $this->consulta->buscaUm('Agendamentos', $request->getParam('id_agendamento'));
			$this->resource->delete($agendamento);
			$this->flash->addMessage('success', 'Agendamento excluido com sucesso!!');
			return $response->withRedirect($this->router->pathFor('home.agendamento.show'));
		}

		public function update($request, $response)
		{
			// Necessário remover o periodo anterior, senão irá cair no metodo abaixo e será
			// informado que este horario já esta agendado, com isso removo o horario previamente marcado
			// verifico se nao esta tentando marcar em horario de outro usuario e cadastro
			$periodo = $this->consulta->buscaUm('Agendamentos', $request->getParam('id_agendamento'));
			$this->resource->delete($periodo);

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

}
