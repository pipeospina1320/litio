<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuIdentificacionTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method IdentificacionTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdentificacionTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdentificacionTipo[]    findAll()
 * @method IdentificacionTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuIdentificacionTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuIdentificacionTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('i')
            ->where('i.something = :value')->setParameter('value', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
