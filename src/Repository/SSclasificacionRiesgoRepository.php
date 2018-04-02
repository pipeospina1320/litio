<?php

namespace App\Repository;

use App\Entity\SSclasificacionRiesgo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SSclasificacionRiesgo|null find($id, $lockMode = null, $lockVersion = null)
 * @method SSclasificacionRiesgo|null findOneBy(array $criteria, array $orderBy = null)
 * @method SSclasificacionRiesgo[]    findAll()
 * @method SSclasificacionRiesgo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SSclasificacionRiesgoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SSclasificacionRiesgo::class);
    }

//    /**
//     * @return SSclasificacionRiesgo[] Returns an array of SSclasificacionRiesgo objects
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
    public function findOneBySomeField($value): ?SSclasificacionRiesgo
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
