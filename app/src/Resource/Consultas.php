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

		// EntityManager via container para efetuar as consultas.
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

		// buscar um registro de uma entidade
		public function buscaUm($entity, $id)
    {
    	return $objeto = $this->entityManager->find('App\Entity\\'.$entity, $id);
    }

		// busca todos os registros
    public function buscaTodos($entity)
    {
    	return $objetos = $this->entityManager->getRepository('App\Entity\\'.$entity)->findAll();
    }

		// buscar um usuario por email
		public function buscaPorEmail($email)
    {
        return $objetos = $this->entityManager->getRepository('App\Entity\Usuarios')->findOneBy(array('email' => $email));
    }

		public function buscaAgendamentoPorSala($idSala){
			return $objetos = $this->entityManager->getRepository('App\Entity\Agendamentos')->findBy(array('idSala' => $idSala));
		}

}
