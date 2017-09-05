<?php

namespace App\Controller;

/**
 * Comentário de cabeçalho de arquivos
* Esta classe é uma classe abstrata para que recebimento do container através do construtor, facilitando a reutilização das Actions filhas.
* O Metodo mágico serve para que as classes filhas possa acessar de forma mágica as propriedades.
* @author José Felipe e Marcos Ereno
* @version 0.1
*/


abstract class Controller
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
