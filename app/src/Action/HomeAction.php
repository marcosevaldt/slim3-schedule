<?php

namespace App\Action;

use Doctrine\Common\Util\Debug;
use Respect\Validation\Validator as v;
use App\Controller\Controller;

class HomeAction extends Controller{

		/**
		 * Display a listing of the resource.
		 * GET
		 */
		public function index($request, $response)
	  {
				return $this->view->render($response, 'home/index.twig');
	  }

		/**
		 * Show the form for creating a new resource.
		 * GET
		 */
		public function create($request, $response)
		{

		}

		/**
		 * Store a newly created resource in storage.
		 * POST
		 */
		public function store($request, $response, $args)
		{

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

		}

		/**
		 * Update the specified resource in storage.
		 * POST
		 */
		public function update($request, $response, $args)
		{

		}

		/**
		 * Remove the specified resource from storage.
		 * POST or DELETE
		 */
		public function destroy($request, $response, $args)
		{

		}

}
