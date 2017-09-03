<?php

namespace App\Controller;

/**
 * Comentário de cabeçalho de arquivos
* Esta classe é uma classe abstrata para gerar o container para as classes se controle
*
* @author José Felipe e Marcos Ereno
* @version 0.1
*/


abstract class Controller
{
	protected $container;
	protected $resource;
	protected $consulta;
	protected $session;

	public function __construct($container) // construtor para definir o uso do container nas classes filhas
	{
		$this->container = $container;
		$this->resource = $container['resource'];
		$this->consulta = $container['consulta'];
		$this->validator = $container['validator'];
		$this->session = $container['session'];
	}

	public function __get($property) // pega todos os atributos que existem no container de forma mágica
	{
		if($this->container->{$property})
		{
			return $this->container->{$property};
		}
	}
}
