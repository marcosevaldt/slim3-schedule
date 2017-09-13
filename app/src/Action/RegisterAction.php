<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class RegisterAction extends Controller{

	/**
	 * Formulário para criação de uma conta
	 * @param  [type] $request  [description]
	 * @param  [type] $response [description]
	 * @return [type]           [description]
	 */
	public function index($request, $response)
	{
		/**
		 * Verificação de usuário com sessao
		 * @var [type]
		 */
		if(!$this->session->get('userSession')){
			return $this->view->render($response, 'register/index.twig');
		}
		return $response->withRedirect($this->router->pathFor('home.index'));
	}

	/**
	 * Armazena os dados vindo do formulário de registro
	 * @param  [type] $request  [description]
	 * @param  [type] $response [description]
	 * @return [type]           [description]
	 */
	public function store($request, $response)
	{

		/**
    * Verificação de um usuário existente
    * @var [type]
    */
		if($this->consulta->buscaPorEmail($request->getParam('email'))){
			$this->flash->addMessage('danger', 'Email já cadastrado, utilize outro.');
			return $this->view->render($response, 'register/index.twig');
		}

		$this->validator->validate($request, [
			'email' => v::email(),
			'senha' => v::alnum()->noWhitespace()->length(6, 10),
			'resenha' => v::equals($request->getParam('senha')),
		], [
			'length' => 'Senha deve no mínimo 6 e máximo 10 caracteres',
			'equals' => 'As senhas informadas não são iguais',
		]);

		if ($this->validator->isValid()) {

			$funcao = $this->consulta->buscaUm('Roles', 1);

			$usuario = $this->resource->loadEntity('Usuarios');
			$usuario->setEmail($request->getParam('email'));
			$usuario->setSenha($request->getParam('senha'));
			$usuario->setIdRole($funcao);

			$this->resource->insert($usuario);

			$this->session->set('userSession', $request->getParam('email'));
			$this->session->set('role', $funcao->getDescricao());

			return $response->withRedirect($this->router->pathFor('home.index'));
		}

		return $this->view->render($response, 'register/index.twig', [
			'errors' => $this->validator->getErrors(),
		]);
	}

}
