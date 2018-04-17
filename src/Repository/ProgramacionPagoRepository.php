<?php

namespace App\Repository;

use App\Entity\ProgramacionPago;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProgramacionPago|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramacionPago|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramacionPago[]    findAll()
 * @method ProgramacionPago[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramacionPagoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProgramacionPago::class);
    }

//    /**
//     * @return ProgramacionPago[] Returns an array of ProgramacionPago objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProgramacionPago
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
