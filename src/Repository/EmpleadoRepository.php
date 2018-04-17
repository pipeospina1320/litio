<?php

namespace App\Repository;

use App\Entity\Empleado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class EmpleadoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Empleado::class);
    }


    public function findBySomething($value)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('e,it,em,cn,ce,rh,lt,s,cb,c,b')
            ->from('App:Empleado', 'e')
            ->leftJoin('e.identificacionTipoRel', 'it')
            ->leftJoin('e.empleadoTipoRel', 'em')
            ->leftJoin('e.ciudadNacimientoRel', 'cn')
            ->leftJoin('e.ciudadExpedicionRel', 'ce')
            ->leftJoin('e.rhTipoRel', 'rh')
            ->leftJoin('e.libretaTipoRel','lt')
            ->leftJoin('e.identidadSexoRel', 's')
            ->leftJoin('e.cuentaBancoTipoRel', 'cb')
            ->leftJoin('e.contratoContratoRel', 'c')
            ->leftJoin('e.bancoRel', 'b')

            ->where("e.codigoEmpleadoPk = {$value}");

        $dql = $qb->getQuery();
        return $dql->getSingleResult();
    }

}
