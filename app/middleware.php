<?php
// Bloquear acesso as rotas baseado no settings
$guardian = function ($request, $response, $next)
{
    if(!$this->session->get('userSession')){
      $this->flash->addMessage('danger', 'Permissão Negada! Logue-se primeiro.');
      return $response->withRedirect($this->router->pathFor('login.index'));
    }

    $route = $request->getAttribute('route');
    $routeName = $route->getName();

    $email = $this->session->get('userSession');
    $user = $this->consulta->buscaPorEmail($email);

    $rotas = $this->get('settings')['auth'];

    foreach($rotas as $key => $value){
        if($user->getIdRole()->getDescricao() == $key){
            if(in_array($routeName, $value)){
                return $next($request, $response);
            }else{
              $this->flash->addMessage('danger', 'Permissão Negada!');
              return $response->withRedirect($this->router->pathFor('home.index'));
            }
        }
    }
};
