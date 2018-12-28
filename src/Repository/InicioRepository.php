<?php

namespace App\Repository;

use App\Entity\Inicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Inicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inicio[]    findAll()
 * @method Inicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InicioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Inicio::class);
    }

    // /**
    //  * @return Inicio[] Returns an array of Inicio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Inicio
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
