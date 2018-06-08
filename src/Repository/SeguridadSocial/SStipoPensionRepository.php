<?php

namespace App\Repository\SeguridadSocial;

use App\Entity\SeguridadSocial\SStipoPension;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SStipoPension|null find($id, $lockMode = null, $lockVersion = null)
 * @method SStipoPension|null findOneBy(array $criteria, array $orderBy = null)
 * @method SStipoPension[]    findAll()
 * @method SStipoPension[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SStipoPensionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SStipoPension::class);
    }

//    /**
//     * @return SStipoPension[] Returns an array of SStipoPension objects
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
    public function findOneBySomeField($value): ?SStipoPension
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
