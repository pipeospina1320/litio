<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuTiempoLaboradoTipo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method TiempoLaboradoTipo|null find($id, $lockMode = null, $lockVersion = null)
 * @method TiempoLaboradoTipo|null findOneBy(array $criteria, array $orderBy = null)
 * @method TiempoLaboradoTipo[]    findAll()
 * @method TiempoLaboradoTipo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhuTiempoLaboradoTipoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuTiempoLaboradoTipo::class);
    }

//    /**
//     * @return TiempoLaboradoTipo[] Returns an array of TiempoLaboradoTipo objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TiempoLaboradoTipo
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
