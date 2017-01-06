<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * StaffRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class StaffRepository extends EntityRepository
{
	public function findAllOrderedByName() {
		return $this->getEntityManager()
            ->createQuery(
                'SELECT p 
                FROM AppBundle:Staff p 
                ORDER BY p.name ASC'
            )
            ->getResult();
	}

	public function findDeptOrderedByNameOnce() {
		return $this->getEntityManager()
            ->createQuery(
                'SELECT a 
                FROM AppBundle:Staff a
                GROUP BY a.department'
            )
            ->getResult();
	}
}
