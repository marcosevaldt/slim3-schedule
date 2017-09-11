<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Roles
{
		/**
		 * @ORM\Id
		 * @ORM\Column(name="id", type="integer")
		 * @ORM\GeneratedValue(strategy="AUTO")
		 */
		private $id;

		/**
		 * @ORM\Column(type="string", length=255)
		 */
		private $descricao;

		/**
		 * [getId description]
		 * @return [String] [description]
		 */
    public function getId()
    {
        return $this->id;
    }

		/**
		 * [getDescricao description]
		 * @return [String] [description]
		 */
    public function getDescricao(){
        return $this->descricao;
    }

}
