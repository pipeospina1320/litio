<?php

namespace App\Repository;

use App\Entity\EntidadCesantias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntidadCesantias|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntidadCesantias|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntidadCesantias[]    findAll()
 * @method EntidadCesantias[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntidadCesantiasRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EntidadCesantias::class);
    }

//    /**
//     * @return EntidadCesantias[] Returns an array of EntidadCesantias objects
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
    public function findOneBySomeField($value): ?EntidadCesantias
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
