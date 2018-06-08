<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuPeriodoPagoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PeriodoPagoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method PeriodoPagoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method PeriodoPagoTipo[]    findAll()
 * @method PeriodoPagoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuPeriodoPagoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuPeriodoPagoTipo::class);
    }

//    /**
//     * @return PeriodoPagoTipo[] Returns an array of PeriodoPagoTipo objects
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
    public function findOneBySomeField($value): ?PeriodoPagoTipo
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
