<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 */
class Usuarios
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
	private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $senha;

	/**
	 * Many Usuarios have One Role
	 * @ORM\ManyToOne(targetEntity="Roles")
	 * @ORM\JoinColumn(name="role_id",referencedColumnName="id")
	 */
	private $idRole;

	/**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = md5($senha);
    }

    public function getIdRole(){
        return $this->idRole;
    }

    public function setIdRole(\App\Entity\Roles $idRole){
        $this->idRole = $idRole;
    }

}
