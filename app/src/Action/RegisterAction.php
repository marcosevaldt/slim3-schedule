<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use App\Controller\Controller;
use Respect\Validation\Validator as v;

class RegisterAction extends Controller{

	public function index($request, $response)
	{
		return $this->view->render($response, 'register/index.twig');
	}

	public function store($request, $response)
	{

		if($this->consulta->buscaPorEmail($request->getParam('email'))){
			$this->flash->addMessage('danger', 'Email já cadastrado, utilize outro.');
			return $this->view->render($response, 'register/index.twig');
		}

		$this->validator->validate($request, [
				'email' => v::email(),
				'senha' => v::alnum()->noWhitespace()->length(6, 10),
				'resenha' => v::equals($request->getParam('senha')),
		]);

		if ($this->validator->isValid()) {

				$funcao = $this->consulta->buscaUm('Roles', 1);

				$usuario = $this->resource->loadEntity('Usuarios');
				$usuario->setEmail($request->getParam('email'));
				$usuario->setSenha($request->getParam('senha'));
				$usuario->setIdRole($funcao);

				$this->resource->insert($usuario);

				$this->session->set('userSession', $request->getParam('email'));

				return $response->withRedirect($this->router->pathFor('home.index'));
		}

		return $this->view->render($response, 'register/index.twig', [
				 'errors' => $this->validator->getErrors(),
		 ]);
	}

}
