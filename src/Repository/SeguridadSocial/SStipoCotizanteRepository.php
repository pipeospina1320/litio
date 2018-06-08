<?php

namespace App\Repository\SeguridadSocial;

use App\Entity\SeguridadSocial\SStipoCotizante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SStipoCotizante|null find($id, $lockMode = null, $lockVersion = null)
 * @method SStipoCotizante|null findOneBy(array $criteria, array $orderBy = null)
 * @method SStipoCotizante[]    findAll()
 * @method SStipoCotizante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SStipoCotizanteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SStipoCotizante::class);
    }

//    /**
//     * @return SStipoCotizante[] Returns an array of SStipoCotizante objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SStipoCotizante
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
