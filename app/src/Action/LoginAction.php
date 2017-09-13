<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use App\Controller\Controller;

class LoginAction extends Controller{

	/**
	 * Formulário de login
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
			return $this->view->render($response, 'login/index.twig');
		}
			return $response->withRedirect($this->router->pathFor('home.index'));
	}

	/**
	 * Validação de acesso pelo formulário
	 * @param  [type] $request  [description]
	 * @param  [type] $response [description]
	 * @return [type]           [description]
	 */
	public function store($request, $response)
	{
		/**
		 * Verifica dados de acesso do usuário
		 * @var [type]
		 */
		if(!$this->consulta->buscaPorEmail($request->getParam('email'))){
			$this->flash->addMessage('danger', 'Usuário Inválido!');
			return $response->withRedirect($this->router->pathFor('login.index'));
		}

		/**
		 * Verifica senha do usuário e seta uma sessao de acesso
		 * @var [type]
		 */
		$user = $this->consulta->buscaPorEmail($request->getParam('email'));
		if($user->getSenha() == md5($request->getParam('senha'))){

			$this->session->set('userSession', $user->getEmail());
			$this->session->set('role', $user->getRoleDescricao());
		 	return $response->withRedirect($this->router->pathFor('home.index'));
		}

		$this->flash->addMessage('danger', 'Informações Inválidas!');
		return $response->withRedirect($this->router->pathFor('login.index'));

	}

	/**
	 * Remove a sessao do usuário, logout.
	 * @param  [type] $request  [description]
	 * @param  [type] $response [description]
	 * @return [type]           [description]
	 */
	public function destroy($request, $response)
	{
		$this->session::destroy();
		return $response->withRedirect($this->router->pathFor('login.index'));
	}

}
