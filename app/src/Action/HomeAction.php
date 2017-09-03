<?php

namespace App\Action;

use App\Controller\Controller;

class HomeAction extends Controller{

	public function index($request, $response)
  {
			return $this->view->render($response, 'home/index.twig', [
				'user' => $this->consulta->buscaPorEmail($this->session->get('userSession')),
			]);
  }


}
