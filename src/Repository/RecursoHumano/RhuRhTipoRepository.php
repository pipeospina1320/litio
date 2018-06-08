<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuRhTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method RhTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method RhTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method RhTipo[]    findAll()
 * @method RhTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuRhTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuRhTipo::class);
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
