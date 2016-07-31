<?php

namespace Models\Repository;
use Doctrine\ORM\EntityRepository;

/**
 * AuthorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    /**
     * this method show latest entity
     * @param $num number of record
     * @return array
     */
    public function findLatest($num)
    {

        $qb = $this->getQueryBuilder()
            ->orderBy('p.date', 'desc')
            ->setMaxResults($num);
        return $qb->getQuery()->getResult();
    }

    /**
     * make the query builder for post
     * @return \Doctrine\ORM\QueryBuilder
     */
    private function getQueryBuilder()
    {

        $em = getEntityManager();
        $qb = $em->getRepository('Models\Entity\Product')
            ->createQueryBuilder('p');
        return $qb;
    }

}
