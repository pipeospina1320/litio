<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuConceptoPagoRepository")
 */
class RhuConceptoPago
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_pago_concepto_pk", type="integer")
     */
    private $codigoPagoConceptoPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=80, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="compone_salario", type="boolean")
     */
    private $componeSalario = false;

    /**
     * @ORM\Column(name="por_porcentaje", type="float")
     */
    private $porPorcentaje = 0;

    /**
     * @ORM\Column(name="por_porcentaje_tiempo_extra", type="float")
     */
    private $porPorcentajeTiempoExtra = 0;

    /**
     * @ORM\Column(name="genera_ingreso_base_prestacion", type="boolean")
     */
    private $generaIngresoBasePrestacion = false;

    /**
     * @ORM\Column(name="genera_ingreso_base_cotizacion", type="boolean")
     */
    private $generaIngresoBaseCotizacion = false;

    /**
     * @ORM\Column(name="operacion", type="integer")
     */
    private $operacion = 0;

    /**
     * @ORM\Column(name="concepto_auxilio_transporte", type="boolean")
     */
    private $conceptoAuxilioTransporte = false;

    /**
     * @ORM\Column(name="concepto_incapacidad", type="boolean")
     */
    private $conceptoIncapacidad = false;

    /**
     * @ORM\Column(name="concepto_pension", type="boolean")
     */
    private $conceptoPension = false;

    /**
     * @ORM\Column(name="concepto_salud", type="boolean")
     */
    private $conceptoSalud = false;

    /**
     * @ORM\Column(name="concepto_vacacion", type="boolean")
     */
    private $conceptoVacacion = false;

    /**
     * @ORM\Column(name="concepto_comision", type="boolean")
     */
    private $conceptoComision = false;

    /**
     * @ORM\Column(name="concepto_cesantia", type="boolean")
     */
    private $conceptoCesantia = false;

    /**
     * @ORM\Column(name="concepto_retencion", type="boolean")
     */
    private $conceptoRetencion = false;

    /**
     * @ORM\Column(name="provision_indemnizacion", type="boolean")
     */
    private $provisionIndemnizacion = false;

    /**
     * @ORM\Column(name="provision_vacacion", type="boolean")
     */
    private $provisionVacacion = false;

    /**
     * 1=Bonificacion, 2=Descuento, 3=Comision
     * @ORM\Column(name="tipo_adicional", type="smallint")
     */
    private $tipoAdicional = 1;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuPagoDetalle", mappedBy="pagoConceptoRel")
     */
    protected $pagosDetallesPagoConceptoRel;

    /**
     * @return mixed
     */
    public function getCodigoPagoConceptoPk()
    {
        return $this->codigoPagoConceptoPk;
    }

    /**
     * @param mixed $codigoPagoConceptoPk
     */
    public function setCodigoPagoConceptoPk($codigoPagoConceptoPk): void
    {
        $this->codigoPagoConceptoPk = $codigoPagoConceptoPk;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getComponeSalario()
    {
        return $this->componeSalario;
    }

    /**
     * @param mixed $componeSalario
     */
    public function setComponeSalario($componeSalario): void
    {
        $this->componeSalario = $componeSalario;
    }

    /**
     * @return mixed
     */
    public function getComponePorcentaje()
    {
        return $this->componePorcentaje;
    }

    /**
     * @param mixed $componePorcentaje
     */
    public function setComponePorcentaje($componePorcentaje): void
    {
        $this->componePorcentaje = $componePorcentaje;
    }

    /**
     * @return mixed
     */
    public function getPorPorcentaje()
    {
        return $this->porPorcentaje;
    }

    /**
     * @param mixed $porPorcentaje
     */
    public function setPorPorcentaje($porPorcentaje): void
    {
        $this->porPorcentaje = $porPorcentaje;
    }

    /**
     * @return mixed
     */
    public function getPorPorcentajeTiempoExtra()
    {
        return $this->porPorcentajeTiempoExtra;
    }

    /**
     * @param mixed $porPorcentajeTiempoExtra
     */
    public function setPorPorcentajeTiempoExtra($porPorcentajeTiempoExtra): void
    {
        $this->porPorcentajeTiempoExtra = $porPorcentajeTiempoExtra;
    }

    /**
     * @return mixed
     */
    public function getGeneraIngresoBasePrestacion()
    {
        return $this->generaIngresoBasePrestacion;
    }

    /**
     * @param mixed $generaIngresoBasePrestacion
     */
    public function setGeneraIngresoBasePrestacion($generaIngresoBasePrestacion): void
    {
        $this->generaIngresoBasePrestacion = $generaIngresoBasePrestacion;
    }

    /**
     * @return mixed
     */
    public function getGeneraIngresoBaseCotizacion()
    {
        return $this->generaIngresoBaseCotizacion;
    }

    /**
     * @param mixed $generaIngresoBaseCotizacion
     */
    public function setGeneraIngresoBaseCotizacion($generaIngresoBaseCotizacion): void
    {
        $this->generaIngresoBaseCotizacion = $generaIngresoBaseCotizacion;
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
    public function getConceptoAdicion()
    {
        return $this->conceptoAdicion;
    }

    /**
     * @param mixed $conceptoAdicion
     */
    public function setConceptoAdicion($conceptoAdicion): void
    {
        $this->conceptoAdicion = $conceptoAdicion;
    }

    /**
     * @return mixed
     */
    public function getConceptoAuxilioTransporte()
    {
        return $this->conceptoAuxilioTransporte;
    }

    /**
     * @param mixed $conceptoAuxilioTransporte
     */
    public function setConceptoAuxilioTransporte($conceptoAuxilioTransporte): void
    {
        $this->conceptoAuxilioTransporte = $conceptoAuxilioTransporte;
    }

    /**
     * @return mixed
     */
    public function getConceptoIncapacidad()
    {
        return $this->conceptoIncapacidad;
    }

    /**
     * @param mixed $conceptoIncapacidad
     */
    public function setConceptoIncapacidad($conceptoIncapacidad): void
    {
        $this->conceptoIncapacidad = $conceptoIncapacidad;
    }

    /**
     * @return mixed
     */
    public function getConceptoIncapacidadEntidad()
    {
        return $this->conceptoIncapacidadEntidad;
    }

    /**
     * @param mixed $conceptoIncapacidadEntidad
     */
    public function setConceptoIncapacidadEntidad($conceptoIncapacidadEntidad): void
    {
        $this->conceptoIncapacidadEntidad = $conceptoIncapacidadEntidad;
    }

    /**
     * @return mixed
     */
    public function getConceptoPension()
    {
        return $this->conceptoPension;
    }

    /**
     * @param mixed $conceptoPension
     */
    public function setConceptoPension($conceptoPension): void
    {
        $this->conceptoPension = $conceptoPension;
    }

    /**
     * @return mixed
     */
    public function getConceptoSalud()
    {
        return $this->conceptoSalud;
    }

    /**
     * @param mixed $conceptoSalud
     */
    public function setConceptoSalud($conceptoSalud): void
    {
        $this->conceptoSalud = $conceptoSalud;
    }

    /**
     * @return mixed
     */
    public function getConceptoVacacion()
    {
        return $this->conceptoVacacion;
    }

    /**
     * @param mixed $conceptoVacacion
     */
    public function setConceptoVacacion($conceptoVacacion): void
    {
        $this->conceptoVacacion = $conceptoVacacion;
    }

    /**
     * @return mixed
     */
    public function getConceptoComision()
    {
        return $this->conceptoComision;
    }

    /**
     * @param mixed $conceptoComision
     */
    public function setConceptoComision($conceptoComision): void
    {
        $this->conceptoComision = $conceptoComision;
    }

    /**
     * @return mixed
     */
    public function getConceptoCesantia()
    {
        return $this->conceptoCesantia;
    }

    /**
     * @param mixed $conceptoCesantia
     */
    public function setConceptoCesantia($conceptoCesantia): void
    {
        $this->conceptoCesantia = $conceptoCesantia;
    }

    /**
     * @return mixed
     */
    public function getConceptoRetencion()
    {
        return $this->conceptoRetencion;
    }

    /**
     * @param mixed $conceptoRetencion
     */
    public function setConceptoRetencion($conceptoRetencion): void
    {
        $this->conceptoRetencion = $conceptoRetencion;
    }

    /**
     * @return mixed
     */
    public function getProvisionIndemnizacion()
    {
        return $this->provisionIndemnizacion;
    }

    /**
     * @param mixed $provisionIndemnizacion
     */
    public function setProvisionIndemnizacion($provisionIndemnizacion): void
    {
        $this->provisionIndemnizacion = $provisionIndemnizacion;
    }

    /**
     * @return mixed
     */
    public function getProvisionVacacion()
    {
        return $this->provisionVacacion;
    }

    /**
     * @param mixed $provisionVacacion
     */
    public function setProvisionVacacion($provisionVacacion): void
    {
        $this->provisionVacacion = $provisionVacacion;
    }

    /**
     * @return mixed
     */
    public function getTipoAdicional()
    {
        return $this->tipoAdicional;
    }

    /**
     * @param mixed $tipoAdicional
     */
    public function setTipoAdicional($tipoAdicional): void
    {
        $this->tipoAdicional = $tipoAdicional;
    }

    /**
     * @return mixed
     */
    public function getRecargoNocturno()
    {
        return $this->recargoNocturno;
    }

    /**
     * @param mixed $recargoNocturno
     */
    public function setRecargoNocturno($recargoNocturno): void
    {
        $this->recargoNocturno = $recargoNocturno;
    }

    /**
     * @return mixed
     */
    public function getHoraExtra()
    {
        return $this->horaExtra;
    }

    /**
     * @param mixed $horaExtra
     */
    public function setHoraExtra($horaExtra): void
    {
        $this->horaExtra = $horaExtra;
    }

    /**
     * @return mixed
     */
    public function getPagosDetallesPagoConceptoRel()
    {
        return $this->pagosDetallesPagoConceptoRel;
    }

    /**
     * @param mixed $pagosDetallesPagoConceptoRel
     */
    public function setPagosDetallesPagoConceptoRel($pagosDetallesPagoConceptoRel): void
    {
        $this->pagosDetallesPagoConceptoRel = $pagosDetallesPagoConceptoRel;
    }

}
