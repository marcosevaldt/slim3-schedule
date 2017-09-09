<?php
// Bloquear acesso as rotas baseado no settings
$guardian = function ($request, $response, $next)
{
    // Se o usuário não esiver logado, redirecionamos para o login.
    if(!$this->session->get('userSession')){
      $this->flash->addMessage('danger', 'Permissão Negada! Logue-se primeiro.');
      return $response->withRedirect($this->router->pathFor('login.index'));
    }

    // Dados da Rota
    $route = $request->getAttribute('route');
    // Nome da Rota
    $routeName = $route->getName();

    // Busco usuário através da sessão
    $email = $this->session->get('userSession');
    $user = $this->consulta->buscaPorEmail($email);

    // Busco as as permissoes nos Settings
    $rotas = $this->get('settings')['auth'];

    // Verifico as rotas de acesso baseado na permissao do usuario
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
