<?php

namespace App\Repository;

use App\Entity\ProgramacionPagoResumen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ProgramacionPagoResumen|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProgramacionPagoResumen|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProgramacionPagoResumen[]    findAll()
 * @method ProgramacionPagoResumen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgramacionPagoResumenRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProgramacionPagoResumen::class);
    }

///    /**
//     * @return ProgramacionPagoDetalle[] Returns an array of ProgramacionPagoDetalle objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProgramacionPagoDetalle
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function cargarContratos($codigoProgramacionPago)
    {

        /**
         * @var Contrato $contrato
         */
        $em = $this->getEntityManager();
        $arProgramacionPago = $em->getRepository('App:ProgramacionPago')->find($codigoProgramacionPago);
        if ($arProgramacionPago->getCodigoPagoTipoFk() == 1) {

            $dql = $em->createQueryBuilder()
                ->select("c")
                ->from("App:Contrato", "c")
                ->andWhere("c.codigoGrupoPagoFk = '{$arProgramacionPago->getCodigoGrupoPagoFk()}'")
                ->andwhere("c.fechaUltimoPago < '{$arProgramacionPago->getFechaDesde()->format('Y-m-d')}'")
                ->andWhere("c.estadoActivo = 1")
                ->getQuery();
            $contratos = $dql->getResult();
            foreach ($contratos as $contrato) {
                $arProgramacionPagoResumen = new ProgramacionPagoResumen();
                $arProgramacionPagoResumen->setProgramacionPagoRel($arProgramacionPago);
                $arProgramacionPagoResumen->setContratoRel($contrato);
                $arProgramacionPagoResumen->setEmpleadoRel($contrato->getcontratoEmpleadoRel());

                $em->persist($arProgramacionPagoResumen);
            }
            $em->flush();
        }

    }
}
