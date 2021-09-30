<?php

namespace App\Repository;

use App\Entity\UidIsoFipsLookUp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method UidIsoFipsLookUp|null find($id, $lockMode = null, $lockVersion = null)
 * @method UidIsoFipsLookUp|null findOneBy(array $criteria, array $orderBy = null)
 * @method UidIsoFipsLookUp[]    findAll()
 * @method UidIsoFipsLookUp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UidIsoFipsLookUpRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UidIsoFipsLookUp::class);
    }

    // /**
    //  * @return UidIsoFipsLookUp[] Returns an array of UidIsoFipsLookUp objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UidIsoFipsLookUp
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
