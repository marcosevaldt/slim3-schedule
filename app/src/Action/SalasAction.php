<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class SalasAction extends Controller
{
    /**
     * Display a listing of the resource.
     * GET
     */
    public function index($request, $response)
    {
        return $this->view->render($response, 'home/salas/index.twig', [
          'salas' => $this->consulta->buscaTodos('Salas'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * GET
     */
    public function create($request, $response)
    {
      return $this->view->render($response, 'home/salas/create.twig');
    }

    /**
     * Store a newly created resource in storage.
     * POST
     */
    public function store($request, $response, $args)
    {
      $sala = $this->resource->loadEntity('Salas');
      $sala->setNumero($request->getParam('numero'));
      $this->resource->insert($sala);
      $this->flash->addMessage('success', 'Sala cadastrada com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.salas.show'));
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
    public function edit($request, $response, $args)
    {
      return $this->view->render($response, 'home/salas/edit.twig', [
        'sala' => $this->consulta->buscaUm('Salas', $args['id']),
      ]);
    }

    /**
     * Update the specified resource in storage.
     * POST
     */
    public function update($request, $response, $args)
    {
      $sala = $this->consulta->buscaUm('Salas', $request->getParam('id'));
      $sala->setNumero($request->getParam('numero'));
      $this->resource->insert($sala);
      $this->flash->addMessage('success', 'Sala atualizada com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.salas.show'));
    }

    /**
     * Remove the specified resource from storage.
     * POST or DELETE
     */
    public function destroy($request, $response, $args)
    {
      $sala = $this->consulta->buscaUm('Salas', $args['id']);
      $this->resource->delete($sala);
      $this->flash->addMessage('success', 'Sala deletada com sucesso!');
      return $response->withRedirect($this->router->pathFor('home.salas.show'));
    }

}
