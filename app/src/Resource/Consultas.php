<?php

namespace App\Resource;

/**
* Comentário de cabeçalho de arquivos
* Esta classe guarda os metodos de uso de banco de dados
*
* @author José Felipe e Marcos Ereno
* @version 0.1
*/

use Doctrine\ORM\EntityManager;
use Doctrine\Common\Util\Debug;


class Consultas
{

	/**
	* @var \Doctrine\ORM\EntityManager
	*/
	protected $entityManager = null;

	/**
	 * Construção da classe com EntityManager
	 * @param EntityManager $entityManager [description]
	 */
	public function __construct(EntityManager $entityManager)
	{
		$this->entityManager = $entityManager;
	}

	/**
	 * Busca um registro de uma entidade pelo id
	 * @param  [type] $entity [description]
	 * @param  [type] $id     [description]
	 * @return [type]         [description]
	 */
	public function buscaUm($entity, $id)
	{
		return $objeto = $this->entityManager->find('App\Entity\\'.$entity, $id);
	}

	/**
	 * Busca todos registro de uma entidade
	 * @param  [type] $entity [description]
	 * @return [type]         [description]
	 */
	public function buscaTodos($entity)
	{
		return $objetos = $this->entityManager->getRepository('App\Entity\\'.$entity)->findAll();
	}

	/**
	 * Busca Usuarios pelo email
	 * @param  [type] $email [description]
	 * @return [type]        [description]
	 */
	public function buscaPorEmail($email)
	{
		return $objetos = $this->entityManager->getRepository('App\Entity\Usuarios')->findOneBy(array('email' => $email));
	}

	/**
	 * Busca agendamentos de uma sala pelo id
	 * @param  [type] $idSala [description]
	 * @return [type]         [description]
	 */
	public function buscaAgendamentoPorSala($idSala){
		return $objetos = $this->entityManager->getRepository('App\Entity\Agendamentos')->findBy(array('idSala' => $idSala));
	}

	/**
	 * Busca agendamentos de uma sala por data
	 * @param  [type] $data [description]
	 * @param  [type] $sala [description]
	 * @return [type]       [description]
	 */
	public function buscaAgendamentoPorData($data, $sala){
		$date = new \DateTime(str_replace("/","-", $data));
		return $objetos = $this->entityManager->getRepository('App\Entity\Agendamentos')->findBy(array('idSala' => $sala ,'periodoInicial' => $date));
	}

	/**
	 * Busca agendamentos de um usuario
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public function buscaAgendamentoPorUsuario($userId){
		return $objetos = $this->entityManager->getRepository('App\Entity\Agendamentos')->findBy(array('idUsuario' => $userId));
	}

}
