<?php

namespace App\Repository;

use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method User|null find($id, $lockMode = null, $lockVersion = null)
 * @method User|null findOneBy(array $criteria, array $orderBy = null)
 * @method User[]    findAll()
 * @method User[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, User::class);
    }

    public function search($search) {
        $manager = $this->getEntityManager();

        $query = $manager->createQuery(
            "
                SELECT u.id as id, u.Username as username, u.Pseudo as pseudo, u.Firstname as firstname, u.Lastname as lastname
                FROM App\Entity\User u
                WHERE u.Username LIKE '%${search}%' OR u.Pseudo LIKE '%${search}%' OR u.Firstname LIKE '%${search}%' OR u.Lastname LIKE '%${search}%'
                ORDER BY u.Lastname ASC, u.Firstname ASC 
            "
        );

        $userList = array();

        foreach($query->getResult() as $key => $r) {
            $user = new User();
            $user->setFirstname($r["firstname"])
                ->setLastname($r["lastname"])
                ->setPseudo($r["pseudo"])
                ->setUsername($r["username"]);

            array_push($userList, $user);
        }

        return $userList;
    }
}
