<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuLibretaTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LibretaTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method LibretaTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method LibretaTipo[]    findAll()
 * @method LibretaTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuLibretaTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuLibretaTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('l')
            ->where('l.something = :value')->setParameter('value', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
