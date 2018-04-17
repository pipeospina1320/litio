<?php

namespace App\Repository;

use App\Entity\ProgramacionPagoResumenDetalle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProgramacionPagoResumenDetalle|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramacionPagoResumenDetalle|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramacionPagoResumenDetalle[]    findAll()
 * @method ProgramacionPagoResumenDetalle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramacionPagoResumenDetalleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProgramacionPagoResumenDetalle::class);
    }

//    /**
//     * @return ProgramacionPagoResumenDetalle[] Returns an array of ProgramacionPagoResumenDetalle objects
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
    public function findOneBySomeField($value): ?ProgramacionPagoResumenDetalle
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
