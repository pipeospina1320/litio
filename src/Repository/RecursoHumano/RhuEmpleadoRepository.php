<?php

namespace App\Repository\RecursoHumano;

use App\Entity\RecursoHumano\RhuEmpleado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class RhuEmpleadoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, RhuEmpleado::class);
    }


    public function lista($codigoEmpleado)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder();
        $qb->select('e,it,em,cn,ce,rh,lt,s,cb,c,b')
            ->from('App:RecursoHumano\RhuEmpleado', 'e')
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

            ->where("e.codigoEmpleadoPk = {$codigoEmpleado}");

        $dql = $qb->getQuery();
        return $dql->getSingleResult();
    }

}
