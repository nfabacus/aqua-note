<?php
/**
 * Created by PhpStorm.
 * User: nobuyukifujioka
 * Date: 13/11/2016
 * Time: 02:54
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;

class GenusRepository extends EntityRepository
{
    public function findAllPublishedOrderedBySize()
    {
        /**
         * @return Genus[]
         */
        return $this->createQueryBuilder('genus')
            ->andWhere('genus.isPublished = :isPublished')
            ->setParameter('isPublished', true)
            ->orderBy('genus.speciesCount', 'DESC')
            ->getQuery()
            ->execute();
    }
}