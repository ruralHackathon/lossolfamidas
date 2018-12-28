<?php

namespace App\Repository;

use App\Entity\Comer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comer[]    findAll()
 * @method Comer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comer::class);
    }

    // /**
    //  * @return Comer[] Returns an array of Comer objects
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
    public function findOneBySomeField($value): ?Comer
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
