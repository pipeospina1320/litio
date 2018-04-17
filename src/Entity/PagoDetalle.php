<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagoDetalleRepository")
 */
class PagoDetalle
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_pago_detalle_sede_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoPagoDetalleSedePk;

    /**
     * @ORM\Column(name="codigo_pago_fk", type="integer", nullable=true)
     */
    private $codigoPagoFk;

    /**
     * @ORM\Column(name="vr_pago", type="float")
     */
    private $vrPago = 0;

    /**
     * @ORM\Column(name="operacion", type="integer")
     */
    private $operacion = 0;

    /**
     * @ORM\Column(name="vr_pago_operado", type="float")
     */
    private $vrPagoOperado = 0;

    /**
     * @ORM\Column(name="numero_horas", type="float")
     */
    private $numeroHoras = 0;

    /**
     * @ORM\Column(name="vr_hora", type="float")
     */
    private $vrHora = 0;

    /**
     * @ORM\Column(name="porcentaje_aplicado", type="float")
     */
    private $porcentajeAplicado = 0;

    /**
     * @ORM\Column(name="vr_dia", type="float")
     */
    private $vrDia = 0;

    /**
     * @ORM\Column(name="vr_total", type="float")
     */
    private $vrTotal = 0;

    /**
     * @ORM\Column(name="detalle", type="string", length=250, nullable=true)
     */
    private $detalle;

    /**
     * @ORM\Column(name="codigo_pago_concepto_fk", type="integer", nullable=true)
     */
    private $codigoPagoConceptoFk;

    /**
     * @ORM\Column(name="vr_ingreso_base_cotizacion", type="float")
     */
    private $vrIngresoBaseCotizacion = 0;

    /**
     * @ORM\Column(name="codigo_sede_fk", type="integer", nullable=true)
     */
    private $codigoSedeFk;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pago", inversedBy="pagosDetallesPagoRel")
     * @ORM\JoinColumn(name="codigo_pago_fk", referencedColumnName="codigo_pago_pk")
     */
    protected $pagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ConceptoPago", inversedBy="pagosDetallesPagoConceptoRel")
     * @ORM\JoinColumn(name="codigo_pago_concepto_fk", referencedColumnName="codigo_pago_concepto_pk")
     */
    protected $pagoConceptoRel;

    /**
     * @return mixed
     */
    public function getCodigoPagoDetalleSedePk()
    {
        return $this->codigoPagoDetalleSedePk;
    }

    /**
     * @param mixed $codigoPagoDetalleSedePk
     */
    public function setCodigoPagoDetalleSedePk($codigoPagoDetalleSedePk): void
    {
        $this->codigoPagoDetalleSedePk = $codigoPagoDetalleSedePk;
    }

    /**
     * @return mixed
     */
    public function getCodigoPagoFk()
    {
        return $this->codigoPagoFk;
    }

    /**
     * @param mixed $codigoPagoFk
     */
    public function setCodigoPagoFk($codigoPagoFk): void
    {
        $this->codigoPagoFk = $codigoPagoFk;
    }

    /**
     * @return mixed
     */
    public function getVrPago()
    {
        return $this->vrPago;
    }

    /**
     * @param mixed $vrPago
     */
    public function setVrPago($vrPago): void
    {
        $this->vrPago = $vrPago;
    }

    /**
     * @return mixed
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * @param mixed $operacion
     */
    public function setOperacion($operacion): void
    {
        $this->operacion = $operacion;
    }

    /**
     * @return mixed
     */
    public function getVrPagoOperado()
    {
        return $this->vrPagoOperado;
    }

    /**
     * @param mixed $vrPagoOperado
     */
    public function setVrPagoOperado($vrPagoOperado): void
    {
        $this->vrPagoOperado = $vrPagoOperado;
    }

    /**
     * @return mixed
     */
    public function getNumeroHoras()
    {
        return $this->numeroHoras;
    }

    /**
     * @param mixed $numeroHoras
     */
    public function setNumeroHoras($numeroHoras): void
    {
        $this->numeroHoras = $numeroHoras;
    }

    /**
     * @return mixed
     */
    public function getVrHora()
    {
        return $this->vrHora;
    }

    /**
     * @param mixed $vrHora
     */
    public function setVrHora($vrHora): void
    {
        $this->vrHora = $vrHora;
    }

    /**
     * @return mixed
     */
    public function getPorcentajeAplicado()
    {
        return $this->porcentajeAplicado;
    }

    /**
     * @param mixed $porcentajeAplicado
     */
    public function setPorcentajeAplicado($porcentajeAplicado): void
    {
        $this->porcentajeAplicado = $porcentajeAplicado;
    }

    /**
     * @return mixed
     */
    public function getVrDia()
    {
        return $this->vrDia;
    }

    /**
     * @param mixed $vrDia
     */
    public function setVrDia($vrDia): void
    {
        $this->vrDia = $vrDia;
    }

    /**
     * @return mixed
     */
    public function getVrTotal()
    {
        return $this->vrTotal;
    }

    /**
     * @param mixed $vrTotal
     */
    public function setVrTotal($vrTotal): void
    {
        $this->vrTotal = $vrTotal;
    }

    /**
     * @return mixed
     */
    public function getDetalle()
    {
        return $this->detalle;
    }

    /**
     * @param mixed $detalle
     */
    public function setDetalle($detalle): void
    {
        $this->detalle = $detalle;
    }

    /**
     * @return mixed
     */
    public function getCodigoPagoConceptoFk()
    {
        return $this->codigoPagoConceptoFk;
    }

    /**
     * @param mixed $codigoPagoConceptoFk
     */
    public function setCodigoPagoConceptoFk($codigoPagoConceptoFk): void
    {
        $this->codigoPagoConceptoFk = $codigoPagoConceptoFk;
    }

    /**
     * @return mixed
     */
    public function getVrIngresoBaseCotizacion()
    {
        return $this->vrIngresoBaseCotizacion;
    }

    /**
     * @param mixed $vrIngresoBaseCotizacion
     */
    public function setVrIngresoBaseCotizacion($vrIngresoBaseCotizacion): void
    {
        $this->vrIngresoBaseCotizacion = $vrIngresoBaseCotizacion;
    }

    /**
     * @return mixed
     */
    public function getCodigoSedeFk()
    {
        return $this->codigoSedeFk;
    }

    /**
     * @param mixed $codigoSedeFk
     */
    public function setCodigoSedeFk($codigoSedeFk): void
    {
        $this->codigoSedeFk = $codigoSedeFk;
    }

    /**
     * @return mixed
     */
    public function getPagoRel()
    {
        return $this->pagoRel;
    }

    /**
     * @param mixed $pagoRel
     */
    public function setPagoRel($pagoRel): void
    {
        $this->pagoRel = $pagoRel;
    }

    /**
     * @return mixed
     */
    public function getPagoConceptoRel()
    {
        return $this->pagoConceptoRel;
    }

    /**
     * @param mixed $pagoConceptoRel
     */
    public function setPagoConceptoRel($pagoConceptoRel): void
    {
        $this->pagoConceptoRel = $pagoConceptoRel;
    }



}
