<?php

namespace App\Repository;

use App\Entity\Marathons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Marathons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Marathons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Marathons[]    findAll()
 * @method Marathons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MarathonsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Marathons::class);
    }

//    /**
//     * @return Marathons[] Returns an array of Marathons objects
//     */
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
    public function findOneBySomeField($value): ?Marathons
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
