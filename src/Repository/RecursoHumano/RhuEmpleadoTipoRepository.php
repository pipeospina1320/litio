<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuEmpleadoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EmpleadoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpleadoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpleadoTipo[]    findAll()
 * @method EmpleadoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuEmpleadoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuEmpleadoTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('e')
            ->where('e.something = :value')->setParameter('value', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
