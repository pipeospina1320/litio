<?php

namespace App\Repository;

use App\Entity\SSsubTipoContizante;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SSsubTipoContizante|null find($id, $lockMode = null, $lockVersion = null)
 * @method SSsubTipoContizante|null findOneBy(array $criteria, array $orderBy = null)
 * @method SSsubTipoContizante[]    findAll()
 * @method SSsubTipoContizante[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SSsubTipoContizanteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SSsubTipoContizante::class);
    }

//    /**
//     * @return SSsubTipoContizante[] Returns an array of SSsubTipoContizante objects
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
    public function findOneBySomeField($value): ?SSsubTipoContizante
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
