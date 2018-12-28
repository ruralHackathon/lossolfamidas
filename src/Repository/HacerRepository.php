<?php

namespace App\Repository;

use App\Entity\Hacer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Hacer|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hacer|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hacer[]    findAll()
 * @method Hacer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HacerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Hacer::class);
    }

    // /**
    //  * @return Hacer[] Returns an array of Hacer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hacer
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
