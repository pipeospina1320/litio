<?php

namespace App\Repository\SeguridadSocial;

use App\Entity\SeguridadSocial\SStipoSalud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SStipoSalud|null find($id, $lockMode = null, $lockVersion = null)
 * @method SStipoSalud|null findOneBy(array $criteria, array $orderBy = null)
 * @method SStipoSalud[]    findAll()
 * @method SStipoSalud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SStipoSaludRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SStipoSalud::class);
    }

//    /**
//     * @return SStipoSalud[] Returns an array of SStipoSalud objects
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
    public function findOneBySomeField($value): ?SStipoSalud
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
