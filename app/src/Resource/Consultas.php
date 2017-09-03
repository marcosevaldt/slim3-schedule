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

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

	public function buscaUm($entity, $id) // buscar um registro de uma entidade
    {
    	return $objeto = $this->entityManager->find('App\Entity\\'.$entity, $id);
    }


    public function buscaTodos($entity) // busca todos os registros
    {
    	return $objetos = $this->entityManager->getRepository('App\Entity\\'.$entity)->findAll();
    }

		public function buscaPorEmail($criterio)
    {
        return $objetos = $this->entityManager->getRepository('App\Entity\Usuarios')->findOneBy(array('email' => $criterio));
    }

}
