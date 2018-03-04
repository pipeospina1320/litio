<?php

namespace App\Repository;

use App\Entity\CuentaBancoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method CuentaBancoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method CuentaBancoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method CuentaBancoTipo[]    findAll()
 * @method CuentaBancoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CuentaBancoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, CuentaBancoTipo::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('c')
            ->where('c.something = :value')->setParameter('value', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
