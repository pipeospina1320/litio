<?php

namespace App\Repository;

use App\Entity\ContratoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ContratoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContratoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContratoTipo[]    findAll()
 * @method ContratoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContratoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ContratoTipo::class);
    }

//    /**
//     * @return ContratoTipo[] Returns an array of ContratoTipo objects
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
    public function findOneBySomeField($value): ?ContratoTipo
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
