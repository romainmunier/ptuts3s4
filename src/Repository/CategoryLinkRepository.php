<?php

namespace App\Repository;

use App\Entity\CategoryLink;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategoryLink|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategoryLink|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategoryLink[]    findAll()
 * @method CategoryLink[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryLinkRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategoryLink::class);
    }

    // /**
    //  * @return CategoryLink[] Returns an array of CategoryLink objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategoryLink
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
