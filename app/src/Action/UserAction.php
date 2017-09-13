<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class UserAction extends Controller
{
  /**
  * Listagem de todos os funcionarios
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @return [type]           [description]
  */
  public function index($request, $response)
  {
    return $this->view->render($response, 'home/user/index.twig', [
      'usuarios' => $this->consulta->buscaTodos('Usuarios'),
    ]);
  }

  /**
  * Formulário para criação dos usuarios
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @param  [type] $args     [description]
  * @return [type]           [description]
  */
  public function create($request, $response, $args)
  {
    return $this->view->render($response, 'home/user/create.twig', [
      'errors' => $args,
    ]);
  }

  /**
  * Armazena os dados vindos do formulário
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @param  [type] $args     [description]
  * @return [type]           [description]
  */
  public function store($request, $response, $args)
  {
    /**
    * Verificação de um usuário existente
    * @var [type]
    */
    if($this->consulta->buscaPorEmail($request->getParam('email'))){
      $this->flash->addMessage('danger', 'Email já cadastrado, utilize outro.');
      return $this->view->render($response, 'home/user/create.twig');
    }

    /**
    * Validação dos dados do usuário via formulário
    * @var [type]
    */
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
      $this->flash->addMessage('success', 'Usuário cadastrado com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.user.show'));
    }

    $this->create($request, $response, $this->validator->getErrors());
  }

  /**
  * Formulário para edição de usuarios
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @param  [type] $args     [description]
  * @param  [type] $errors   [description]
  * @return [type]           [description]
  */
  public function edit($request, $response, $args, $errors = NULL)
  {
    return $this->view->render($response, 'home/user/edit.twig', [
      'usuario' => $this->consulta->buscaUm('Usuarios', $args['id']),
      'errors' => $errors,
    ]);
  }

  /**
  * Atualiza os dados vindos do formulário
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @return [type]           [description]
  */
  public function update($request, $response)
  {

    $this->validator->validate($request, [
      'email' => v::email(),
      'senha' => v::alnum()->noWhitespace()->length(6, 10),
      'resenha' => v::equals($request->getParam('senha')),
    ], [
      'length' => 'Senha deve no mínimo 6 e máximo 10 caracteres',
      'equals' => 'As senhas informadas não são iguais',
    ]);

    /**
    * Verificação de um usuário existente
    * @var [type]
    */
    if($this->consulta->buscaPorEmail($request->getParam('email'))){
      $this->flash->addMessage('danger', 'Email já cadastrado, utilize outro.');
      return $response->withRedirect($this->router->pathFor('home.user.show'));
    }

    if ($this->validator->isValid()) {

      $user = $this->consulta->buscaUm('Usuarios', $request->getParam('id'));
      $user->setEmail($request->getParam('email'));
      $user->setSenha($request->getParam('senha'));
      $this->resource->insert($user);

      $this->flash->addMessage('success', 'Usuário Atualizado com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.user.show'));
    }

    /**
    * Tratamento dos errors
    * @var array
    */
    $args = array('id' => $request->getParam('id'));
    $this->edit($request, $response, $args, $this->validator->getErrors());

  }

  /**
  * Removação de um usuário
  * @param  [type] $request  [description]
  * @param  [type] $response [description]
  * @param  [type] $args     [description]
  * @return [type]           [description]
  */
  public function destroy($request, $response, $args)
  {
    $user = $this->consulta->buscaUm('Usuarios', $args['id']);
    $this->resource->delete($user);
    $this->flash->addMessage('success', 'Usuário deletado com sucesso!');
    return $response->withRedirect($this->router->pathFor('home.user.show'));
  }

}
