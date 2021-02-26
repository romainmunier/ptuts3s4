<?php

namespace App\Repository;

use App\Entity\Category;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Category::class);
    }

    public function findByValue(string $value) {
        $manager = $this->getEntityManager();

        $query = $manager->createQuery("
            SELECT c.id as id, c.Name as name, c.Date as date, c.Sumup as sumup 
            FROM App\Entity\Category c
            WHERE c.Visibility = TRUE
            AND (c.Name LIKE '%${value}%' OR c.Date LIKE '%${value}%' OR c.Sumup LIKE '%${value}%' OR c.id LIKE '%${value}%')
            ORDER BY c.Date DESC, c.Name ASC, c.id DESC 
        ");

        return $query->getResult();
    }

    public function findByNotNull() {
        $manager = $this->getEntityManager();

        return $manager->createQuery("
            SELECT c
            FROM App\Entity\Category c
            JOIN App\Entity\Media m WITH c.id = m.category
            WHERE m.path IS NOT NULL
            GROUP BY c.Name 
        ")
            ->getResult();
    }
}
