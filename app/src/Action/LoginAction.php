<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use App\Controller\Controller;
use Respect\Validation\Validator as v;

class LoginAction extends Controller{

	public function index($request, $response)
	{
		return $this->view->render($response, 'login/index.twig');
	}

	public function store($request, $response)
	{
		if(!$this->consulta->buscaPorEmail($request->getParam('email'))){
			$this->flash->addMessage('danger', 'Usuário Inválido!');
			return $response->withRedirect($this->router->pathFor('login.index'));
		}

		$user = $this->consulta->buscaPorEmail($request->getParam('email'));

		if($user->getSenha() == md5($request->getParam('senha'))){

			$this->session->set('userSession', $request->getParam('email'));
		 	return $response->withRedirect($this->router->pathFor('home.index'));
		}

		$this->flash->addMessage('danger', 'Informações Inválidas!');
		return $response->withRedirect($this->router->pathFor('login.index'));

	}

	public function destroy($request, $response)
	{
		$this->session::destroy();
		return $response->withRedirect($this->router->pathFor('login.index'));
	}

}
