<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class UserAction extends Controller
{
    /**
     * Display a listing of the resource.
     * GET
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'home/user/index.twig', [
          'usuarios' => $this->consulta->buscaTodos('Usuarios'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * GET
     */
    public function create($request, $response, $args)
    {
      return $this->view->render($response, 'home/user/create.twig', [
        'errors' => $args,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     * POST
     */
    public function store($request, $response, $args)
    {
      if($this->consulta->buscaPorEmail($request->getParam('email'))){
  			$this->flash->addMessage('danger', 'Email já cadastrado, utilize outro.');
  			return $this->view->render($response, 'home/user/create.twig');
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
        $this->flash->addMessage('success', 'Usuário cadastrado com sucesso!');
  			return $response->withRedirect($this->router->pathFor('home.user.show'));
  		}

  		$this->create($request, $response, $this->validator->getErrors());
    }

    /**
     * Display the specified resource.
     * GET
     */
    public function show($request, $response, $args)
    {

    }

    /**
     * Show the form for editing the specified resource.
     * GET or PUT
     */
    public function edit($request, $response, $args, $errors = NULL)
    {
      return $this->view->render($response, 'home/user/edit.twig', [
        'usuario' => $this->consulta->buscaUm('Usuarios', $args['id']),
        'errors' => $errors,
      ]);
    }

    /**
     * Update the specified resource in storage.
     * POST
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

      $args = array('id' => $request->getParam('id'));
      $this->edit($request, $response, $args, $this->validator->getErrors());

    }

    /**
     * Remove the specified resource from storage.
     * POST or DELETE
     */
    public function destroy($request, $response, $args)
    {
      $user = $this->consulta->buscaUm('Usuarios', $args['id']);
      $this->resource->delete($user);
      $this->flash->addMessage('success', 'Usuário deletado com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.user.show'));
    }

}
