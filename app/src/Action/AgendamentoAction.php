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
			$sala = $this->consulta->buscaUm('Salas', $request->getParam('sala'));
			$user = $this->consulta->buscaPorEmail($request->getParam('email_user'));
			$agendamento = $this->resource->loadEntity('Agendamentos');
			$agendamento->setPeriodoInicial($request->getParam('periodo_inicial'));
			$agendamento->setPeriodoFinal($request->getParam('periodo_final'));
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

}
