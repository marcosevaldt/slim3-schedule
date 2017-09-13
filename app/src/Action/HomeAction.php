<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class HomeAction extends Controller{
	
	/**
	* Visualização da pagina inicial após login
	* @param  [type] $request  [description]
	* @param  [type] $response [description]
	* @return [type]           [description]
	*/
	public function index($request, $response)
	{
		return $this->view->render($response, 'home/index.twig');
	}

}
