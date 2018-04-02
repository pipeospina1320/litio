<?php

namespace App\Repository;

use App\Entity\GrupoPago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method GrupoPago|null find($id, $lockMode = null, $lockVersion = null)
 * @method GrupoPago|null findOneBy(array $criteria, array $orderBy = null)
 * @method GrupoPago[]    findAll()
 * @method GrupoPago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GrupoPagoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, GrupoPago::class);
    }

//    /**
//     * @return GrupoPago[] Returns an array of GrupoPago objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GrupoPago
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
