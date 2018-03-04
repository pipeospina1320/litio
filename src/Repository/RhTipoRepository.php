<?php

namespace App\Repository;

use App\Entity\RhTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RhTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method RhTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method RhTipo[]    findAll()
 * @method RhTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('r')
            ->where('r.something = :value')->setParameter('value', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
