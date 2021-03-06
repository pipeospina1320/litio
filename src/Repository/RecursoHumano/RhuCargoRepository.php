<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuCargo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Cargo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cargo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cargo[]    findAll()
 * @method Cargo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuCargoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuCargo::class);
    }

//    /**
//     * @return Cargo[] Returns an array of Cargo objects
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
    public function findOneBySomeField($value): ?Cargo
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
