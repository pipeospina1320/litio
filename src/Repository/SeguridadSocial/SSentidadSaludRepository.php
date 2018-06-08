<?php

namespace App\Repository\SeguridadSocial;

use App\Entity\SeguridadSocial\SSentidadSalud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntidadSalud|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntidadSalud|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntidadSalud[]    findAll()
 * @method EntidadSalud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SSentidadSaludRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SSentidadSalud::class);
    }

//    /**
//     * @return EntidadSalud[] Returns an array of EntidadSalud objects
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
    public function findOneBySomeField($value): ?EntidadSalud
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
