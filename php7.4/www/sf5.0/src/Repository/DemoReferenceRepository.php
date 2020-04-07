<?php

namespace App\Repository;

use App\Entity\DemoReference;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DemoReference|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemoReference|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemoReference[]    findAll()
 * @method DemoReference[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemoReferenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemoReference::class);
    }

    // /**
    //  * @return DemoReference[] Returns an array of DemoReference objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DemoReference
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
