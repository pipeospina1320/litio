<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuEmpleadoNumerosContacto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EmpleadoNumerosContacto|null find($id, $lockMode = null, $lockVersion = null)
 * @method EmpleadoNumerosContacto|null findOneBy(array $criteria, array $orderBy = null)
 * @method EmpleadoNumerosContacto[]    findAll()
 * @method EmpleadoNumerosContacto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuEmpleadoNumerosContactoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuEmpleadoNumerosContacto::class);
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
