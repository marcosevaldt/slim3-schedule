<?php

namespace App\Entity;

use App\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="agendamentos")
*/
class Agendamentos
{
		/**
		* @ORM\Id
		* @ORM\Column(name="id", type="integer")
		* @ORM\GeneratedValue(strategy="AUTO")
		*/
		private $id;

		/**
		 * @ORM\Column(name="periodo_inicial", type="datetime")
		 */
		private $periodoInicial;

		/**
		 * @ORM\Column(name="periodo_final", type="datetime")
		 */
		private $periodoFinal;

		/**
		* Many Agendamentos have One Sala
		* @ORM\ManyToOne(targetEntity="Salas")
		* @ORM\JoinColumn(name="sala_id",referencedColumnName="id")
		*/
		private $idSala;

		/**
		* Many Agendamentos have One Usuario
		* @ORM\ManyToOne(targetEntity="Usuarios")
		* @ORM\JoinColumn(name="usuario_id",referencedColumnName="id")
		*/
		private $idUsuario;

		public function getId()
		{
			return $this->id;
		}

		public function getIdRole(){
			return $this->idRole;
		}

		public function getPeriodoInicial(){
			return $this->periodoInicial;
		}

		public function getPeriodoFinal(){
			return $this->periodoFinal;
		}

		public function getIdSala(){
			return $this->idSala;
		}

		public function getIdUsuario(){
			return $this->idUsuario;
		}

		public function setPeriodoInicial($periodoInicial){
  		$date = new \DateTime(str_replace("/","-", $periodoInicial));
  		$this->periodoInicial = $date;
    }

		public function setPeriodoFinal($periodoFinal){
  		$date = new \DateTime(str_replace("/","-", $periodoFinal));
  		$this->periodoFinal = $date;
    }

		public function setIdSala(\App\Entity\Salas $salaId){
				$this->idSala = $salaId;
		}

		public function setIdUsuario(\App\Entity\Usuarios $usuarioId){
				$this->idUsuario = $usuarioId;
		}



}
