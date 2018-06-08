<?php

namespace App\Repository\SeguridadSocial;

use App\Entity\SeguridadSocial\SSentidadPension;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntidadPension|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntidadPension|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntidadPension[]    findAll()
 * @method EntidadPension[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SSentidadPensionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SSentidadPension::class);
    }

//    /**
//     * @return EntidadPension[] Returns an array of EntidadPension objects
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
    public function findOneBySomeField($value): ?EntidadPension
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
