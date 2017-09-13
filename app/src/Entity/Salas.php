<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="salas")
*/
class Salas
{
		/**
		* @ORM\Id
		* @ORM\Column(name="id", type="integer")
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;

		/**
		* @ORM\Column(type="integer")
		*/
		private $numero;

		public function getId()
		{
			return $this->id;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = (int)$numero;
		}


}
