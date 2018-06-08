<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuSalarioTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SalarioTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method SalarioTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method SalarioTipo[]    findAll()
 * @method SalarioTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuSalarioTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuSalarioTipo::class);
    }

//    /**
//     * @return SalarioTipo[] Returns an array of SalarioTipo objects
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
    public function findOneBySomeField($value): ?SalarioTipo
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
