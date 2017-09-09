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

class Resource
{

		/**
	 	* @var \Doctrine\ORM\EntityManager
	 	*/
		protected $entityManager = null;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

		// metodo que insere registros
    public function insert($entity)
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }
		// metodo que deleta registros
    public function delete($entity)
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }
		// metodo que instancia uma nova entidade
		public function loadEntity($classname){
        $entityInfo = $this->entityManager->getClassMetadata("App\Entity\\" . $classname);
        $entityMember = $entityInfo->newInstance();
        return $entityMember;
    }

}
