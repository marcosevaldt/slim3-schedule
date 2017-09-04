<?php

namespace App\Controller;

/**
 * Comentário de cabeçalho de arquivos
* Esta classe é uma classe para gerar o container para as classes se controle
*
* @author José Felipe e Marcos Ereno
* @version 0.1
*/


class Controller
{
	protected $container;

	// construtor para definir o uso do container nas classes filhas
	public function __construct($container)
	{
		$this->container = $container;
	}

	// pega todos os atributos que existem no container de forma mágica
	public function __get($property)
	{
		if($this->container->{$property})
		{
			return $this->container->{$property};
		}
	}
		
}
