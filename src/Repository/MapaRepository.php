<?php

namespace App\Repository;

use App\Entity\Mapa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Mapa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Mapa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Mapa[]    findAll()
 * @method Mapa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Mapa::class);
    }

    // /**
    //  * @return Mapa[] Returns an array of Mapa objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Mapa
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
