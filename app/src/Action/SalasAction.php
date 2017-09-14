<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class SalasAction extends Controller
{
  /**
   * Listagem de todas as salas
   * @param  [type] $request  [description]
   * @param  [type] $response [description]
   * @return [type]           [description]
   */
  public function index($request, $response)
  {
    return $this->view->render($response, 'home/salas/index.twig', [
      'salas' => $this->consulta->buscaTodos('Salas'),
    ]);
  }

  /**
   * Formulário para criação das salas
   * @param  [type] $request  [description]
   * @param  [type] $response [description]
   * @return [type]           [description]
   */
  public function create($request, $response)
  {
    return $this->view->render($response, 'home/salas/create.twig');
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
    $sala = $this->resource->loadEntity('Salas');
    $sala->setNumero($request->getParam('numero'));
    $this->resource->insert($sala);
    $this->flash->addMessage('success', 'Sala cadastrada com sucesso!');
    return $response->withRedirect($this->router->pathFor('home.salas.show'));
  }

  /**
   * Formulário para edição das salas
   * @param  [type] $request  [description]
   * @param  [type] $response [description]
   * @param  [type] $args     [description]
   * @return [type]           [description]
   */
  public function edit($request, $response, $args)
  {
    return $this->view->render($response, 'home/salas/edit.twig', [
      'sala' => $this->consulta->buscaUm('Salas', $args['id']),
    ]);
  }

  /**
   * Atualiza os dados vindos do formulário
   * @param  [type] $request  [description]
   * @param  [type] $response [description]
   * @param  [type] $args     [description]
   * @return [type]           [description]
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
   * Removação de uma sala
   * @param  [type] $request  [description]
   * @param  [type] $response [description]
   * @param  [type] $args     [description]
   * @return [type]           [description]
   */
  public function destroy($request, $response, $args)
  {
    $sala = $this->consulta->buscaUm('Salas', $args['id']);

    if($agendamentos = $this->consulta->buscaAgendamentoPorSala($sala)){
      foreach($agendamentos as $agendamento){
        $this->resource->delete($agendamento);
      }
    }

    $this->resource->delete($sala);
    $this->flash->addMessage('success', 'Sala deletada com sucesso!');
    return $response->withRedirect($this->router->pathFor('home.salas.show'));
  }

}
