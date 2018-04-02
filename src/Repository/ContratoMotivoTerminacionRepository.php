<?php

namespace App\Repository;

use App\Entity\ContratoMotivoTerminacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContratoMotivoTerminacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContratoMotivoTerminacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContratoMotivoTerminacion[]    findAll()
 * @method ContratoMotivoTerminacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContratoMotivoTerminacionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContratoMotivoTerminacion::class);
    }

//    /**
//     * @return ContratoMotivoTerminacion[] Returns an array of ContratoMotivoTerminacion objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContratoMotivoTerminacion
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
