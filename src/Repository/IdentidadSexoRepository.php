<?php

namespace App\Repository;

use App\Entity\IdentidadSexo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method IdentidadSexo|null find($id, $lockMode = null, $lockVersion = null)
 * @method IdentidadSexo|null findOneBy(array $criteria, array $orderBy = null)
 * @method IdentidadSexo[]    findAll()
 * @method IdentidadSexo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IdentidadSexoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, IdentidadSexo::class);
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
