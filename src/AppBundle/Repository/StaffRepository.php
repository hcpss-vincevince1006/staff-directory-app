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
	public function findAllOrderedByName($searchTerm) {
		return $this->getEntityManager()
    ->createQuery(
        "SELECT staff 
        FROM AppBundle:Staff staff 
        WHERE staff.name LIKE '%$searchTerm%'
        ORDER BY staff.name ASC"
    )
    ->getResult();
	}

	public function findDeptOrderedByNameOnce() {
		return $this->getEntityManager()
    ->createQuery(
        'SELECT a.department 
        FROM AppBundle:Staff a
        GROUP BY a.department'
    )
    ->getResult();
	}
}
