<?php

namespace App\Repository;

use App\Entity\EntidadCaja;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntidadCaja|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntidadCaja|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntidadCaja[]    findAll()
 * @method EntidadCaja[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntidadCajaRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EntidadCaja::class);
    }

//    /**
//     * @return EntidadCaja[] Returns an array of EntidadCaja objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntidadCaja
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
