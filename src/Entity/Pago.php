<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagoRepository")
 */
class Pago
{

    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_pago_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoPagoPk;

    /**
     * @ORM\Column(name="codigo_pago_tipo_fk", type="integer", nullable=false)
     */
    private $codigoPagoTipoFk;

    /**
     * @ORM\Column(name="codigo_periodo_pago_fk", type="integer", nullable=true)
     */
    private $codigoPeriodoPagoFk;

    /**
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero = 0;

    /**
     * @ORM\Column(name="codigo_empleado_fk", type="integer", nullable=true)
     */
    private $codigoEmpleadoFk;

    /**
     * @ORM\Column(name="codigo_contrato_fk", type="integer", nullable=true)
     */
    private $codigoContratoFk;

    /**
     * @ORM\Column(name="codigo_programacion_pago_fk", type="integer", nullable=true)
     */
    private $codigoProgramacionPagoFk;

    /**
     * @ORM\Column(name="codigo_programacion_pago_detalle_fk", type="integer", nullable=true)
     */
    private $codigoProgramacionPagoDetalleFk;

    /**
     * @ORM\Column(name="codigo_grupo_pago_fk", type="integer", nullable=true)
     */
    private $codigoGrupoPagoFk;

    /**
     * @ORM\Column(name="fecha_desde", type="date", nullable=true)
     */
    private $fechaDesde;

    /**
     * @ORM\Column(name="fecha_hasta", type="date", nullable=true)
     */
    private $fechaHasta;

    /**
     * @ORM\Column(name="vr_salario", type="float")
     */
    private $vrSalario = 0;

    /**
     * Es el salario que tenia el empleado cuando se genero el pago
     * @ORM\Column(name="vr_salario_empleado", type="float")
     */
    private $vrSalarioEmpleado = 0;

    /**
     * @ORM\Column(name="vr_devengado", type="float")
     */
    private $vrDevengado = 0;

    /**
     * @ORM\Column(name="vr_deducciones", type="float")
     */
    private $vrDeducciones = 0;

    /**
     * @ORM\Column(name="vr_neto", type="float")
     */
    private $vrNeto = 0;

    /**
     * @ORM\Column(name="vr_bruto", type="float")
     */
    private $vrBruto = 0;

    /**
     * @ORM\Column(name="vr_ingreso_base_cotizacion", type="float")
     */
    private $vrIngresoBaseCotizacion = 0;

    /**
     * @ORM\Column(name="vr_ingreso_base_prestacion", type="float")
     */
    private $vrIngresoBasePrestacion = 0;

    /**
     * @ORM\Column(name="dias_periodo", type="integer")
     */
    private $diasPeriodo = 0;

    /**
     * @ORM\Column(name="dias_laborados", type="integer")
     */
    private $diasLaborados = 0;

    /**
     * @ORM\Column(name="estado_pagado", type="boolean")
     */
    private $estadoPagado = 0;

    /**
     * @ORM\Column(name="estado_pagado_banco", type="boolean")
     */
    private $estadoPagadoBanco = 0;

    /**
     * @ORM\Column(name="estado_anulado", type="boolean")
     */
    private $estadoAnulado = 0;

    /**
     * @ORM\Column(name="comentarios", type="string", length=500, nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(name="estado_contabilizado", type="boolean")
     */
    private $estadoContabilizado = 0;

    /**
     * @ORM\Column(name="dias_ausentismo", type="integer")
     */
    private $diasAusentismo = 0;

    /**
     * @ORM\Column(name="codigo_usuario", type="string", length=50, nullable=true)
     */
    private $codigoUsuario;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PagoTipo", inversedBy="pagosPagoTipoRel")
     * @ORM\JoinColumn(name="codigo_pago_tipo_fk", referencedColumnName="codigo_pago_tipo_pk")
     */
    protected $pagoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PeriodoPagoTipo", inversedBy="pagosPeriodoPagoRel")
     * @ORM\JoinColumn(name="codigo_periodo_pago_fk", referencedColumnName="codigo_periodo_pago_pk")
     */
    protected $periodoPagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrupoPago", inversedBy="pagosGrupoPagoRel")
     * @ORM\JoinColumn(name="codigo_grupo_pago_fk", referencedColumnName="codigo_grupo_pago_pk")
     */
    protected $grupoPagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Empleado", inversedBy="pagosEmpleadoRel")
     * @ORM\JoinColumn(name="codigo_empleado_fk", referencedColumnName="codigo_empleado_pk")
     */
    protected $empleadoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contrato", inversedBy="pagosContratoRel")
     * @ORM\JoinColumn(name="codigo_contrato_fk", referencedColumnName="codigo_contrato_pk")
     */
    protected $contratoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ProgramacionPago", inversedBy="pagosProgramacionPagoRel")
     * @ORM\JoinColumn(name="codigo_programacion_pago_fk", referencedColumnName="codigo_programacion_pago_pk")
     */
    protected $programacionPagoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\PagoDetalle", mappedBy="pagoRel")
     */
    protected $pagosDetallesPagoRel;

    /**
     * @return mixed
     */
    public function getCodigoPagoPk()
    {
        return $this->codigoPagoPk;
    }

    /**
     * @param mixed $codigoPagoPk
     */
    public function setCodigoPagoPk($codigoPagoPk): void
    {
        $this->codigoPagoPk = $codigoPagoPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoPagoTipoFk()
    {
        return $this->codigoPagoTipoFk;
    }

    /**
     * @param mixed $codigoPagoTipoFk
     */
    public function setCodigoPagoTipoFk($codigoPagoTipoFk): void
    {
        $this->codigoPagoTipoFk = $codigoPagoTipoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoPeriodoPagoFk()
    {
        return $this->codigoPeriodoPagoFk;
    }

    /**
     * @param mixed $codigoPeriodoPagoFk
     */
    public function setCodigoPeriodoPagoFk($codigoPeriodoPagoFk): void
    {
        $this->codigoPeriodoPagoFk = $codigoPeriodoPagoFk;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getCodigoEmpleadoFk()
    {
        return $this->codigoEmpleadoFk;
    }

    /**
     * @param mixed $codigoEmpleadoFk
     */
    public function setCodigoEmpleadoFk($codigoEmpleadoFk): void
    {
        $this->codigoEmpleadoFk = $codigoEmpleadoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoContratoFk()
    {
        return $this->codigoContratoFk;
    }

    /**
     * @param mixed $codigoContratoFk
     */
    public function setCodigoContratoFk($codigoContratoFk): void
    {
        $this->codigoContratoFk = $codigoContratoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoProgramacionPagoFk()
    {
        return $this->codigoProgramacionPagoFk;
    }

    /**
     * @param mixed $codigoProgramacionPagoFk
     */
    public function setCodigoProgramacionPagoFk($codigoProgramacionPagoFk): void
    {
        $this->codigoProgramacionPagoFk = $codigoProgramacionPagoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoProgramacionPagoDetalleFk()
    {
        return $this->codigoProgramacionPagoDetalleFk;
    }

    /**
     * @param mixed $codigoProgramacionPagoDetalleFk
     */
    public function setCodigoProgramacionPagoDetalleFk($codigoProgramacionPagoDetalleFk): void
    {
        $this->codigoProgramacionPagoDetalleFk = $codigoProgramacionPagoDetalleFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoGrupoPagoFk()
    {
        return $this->codigoGrupoPagoFk;
    }

    /**
     * @param mixed $codigoGrupoPagoFk
     */
    public function setCodigoGrupoPagoFk($codigoGrupoPagoFk): void
    {
        $this->codigoGrupoPagoFk = $codigoGrupoPagoFk;
    }

    /**
     * @return mixed
     */
    public function getFechaDesde()
    {
        return $this->fechaDesde;
    }

    /**
     * @param mixed $fechaDesde
     */
    public function setFechaDesde($fechaDesde): void
    {
        $this->fechaDesde = $fechaDesde;
    }

    /**
     * @return mixed
     */
    public function getFechaHasta()
    {
        return $this->fechaHasta;
    }

    /**
     * @param mixed $fechaHasta
     */
    public function setFechaHasta($fechaHasta): void
    {
        $this->fechaHasta = $fechaHasta;
    }

    /**
     * @return mixed
     */
    public function getVrSalario()
    {
        return $this->vrSalario;
    }

    /**
     * @param mixed $vrSalario
     */
    public function setVrSalario($vrSalario): void
    {
        $this->vrSalario = $vrSalario;
    }

    /**
     * @return mixed
     */
    public function getVrSalarioEmpleado()
    {
        return $this->vrSalarioEmpleado;
    }

    /**
     * @param mixed $vrSalarioEmpleado
     */
    public function setVrSalarioEmpleado($vrSalarioEmpleado): void
    {
        $this->vrSalarioEmpleado = $vrSalarioEmpleado;
    }

    /**
     * @return mixed
     */
    public function getVrDevengado()
    {
        return $this->vrDevengado;
    }

    /**
     * @param mixed $vrDevengado
     */
    public function setVrDevengado($vrDevengado): void
    {
        $this->vrDevengado = $vrDevengado;
    }

    /**
     * @return mixed
     */
    public function getVrDeducciones()
    {
        return $this->vrDeducciones;
    }

    /**
     * @param mixed $vrDeducciones
     */
    public function setVrDeducciones($vrDeducciones): void
    {
        $this->vrDeducciones = $vrDeducciones;
    }

    /**
     * @return mixed
     */
    public function getVrNeto()
    {
        return $this->vrNeto;
    }

    /**
     * @param mixed $vrNeto
     */
    public function setVrNeto($vrNeto): void
    {
        $this->vrNeto = $vrNeto;
    }

    /**
     * @return mixed
     */
    public function getVrBruto()
    {
        return $this->vrBruto;
    }

    /**
     * @param mixed $vrBruto
     */
    public function setVrBruto($vrBruto): void
    {
        $this->vrBruto = $vrBruto;
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
    public function getVrIngresoBasePrestacion()
    {
        return $this->vrIngresoBasePrestacion;
    }

    /**
     * @param mixed $vrIngresoBasePrestacion
     */
    public function setVrIngresoBasePrestacion($vrIngresoBasePrestacion): void
    {
        $this->vrIngresoBasePrestacion = $vrIngresoBasePrestacion;
    }

    /**
     * @return mixed
     */
    public function getDiasPeriodo()
    {
        return $this->diasPeriodo;
    }

    /**
     * @param mixed $diasPeriodo
     */
    public function setDiasPeriodo($diasPeriodo): void
    {
        $this->diasPeriodo = $diasPeriodo;
    }

    /**
     * @return mixed
     */
    public function getDiasLaborados()
    {
        return $this->diasLaborados;
    }

    /**
     * @param mixed $diasLaborados
     */
    public function setDiasLaborados($diasLaborados): void
    {
        $this->diasLaborados = $diasLaborados;
    }

    /**
     * @return mixed
     */
    public function getEstadoPagado()
    {
        return $this->estadoPagado;
    }

    /**
     * @param mixed $estadoPagado
     */
    public function setEstadoPagado($estadoPagado): void
    {
        $this->estadoPagado = $estadoPagado;
    }

    /**
     * @return mixed
     */
    public function getEstadoPagadoBanco()
    {
        return $this->estadoPagadoBanco;
    }

    /**
     * @param mixed $estadoPagadoBanco
     */
    public function setEstadoPagadoBanco($estadoPagadoBanco): void
    {
        $this->estadoPagadoBanco = $estadoPagadoBanco;
    }

    /**
     * @return mixed
     */
    public function getEstadoAnulado()
    {
        return $this->estadoAnulado;
    }

    /**
     * @param mixed $estadoAnulado
     */
    public function setEstadoAnulado($estadoAnulado): void
    {
        $this->estadoAnulado = $estadoAnulado;
    }

    /**
     * @return mixed
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * @param mixed $comentarios
     */
    public function setComentarios($comentarios): void
    {
        $this->comentarios = $comentarios;
    }

    /**
     * @return mixed
     */
    public function getEstadoContabilizado()
    {
        return $this->estadoContabilizado;
    }

    /**
     * @param mixed $estadoContabilizado
     */
    public function setEstadoContabilizado($estadoContabilizado): void
    {
        $this->estadoContabilizado = $estadoContabilizado;
    }

    /**
     * @return mixed
     */
    public function getDiasAusentismo()
    {
        return $this->diasAusentismo;
    }

    /**
     * @param mixed $diasAusentismo
     */
    public function setDiasAusentismo($diasAusentismo): void
    {
        $this->diasAusentismo = $diasAusentismo;
    }

    /**
     * @return mixed
     */
    public function getCodigoUsuario()
    {
        return $this->codigoUsuario;
    }

    /**
     * @param mixed $codigoUsuario
     */
    public function setCodigoUsuario($codigoUsuario): void
    {
        $this->codigoUsuario = $codigoUsuario;
    }

    /**
     * @return mixed
     */
    public function getPagoTipoRel()
    {
        return $this->pagoTipoRel;
    }

    /**
     * @param mixed $pagoTipoRel
     */
    public function setPagoTipoRel($pagoTipoRel): void
    {
        $this->pagoTipoRel = $pagoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getPeriodoPagoRel()
    {
        return $this->periodoPagoRel;
    }

    /**
     * @param mixed $periodoPagoRel
     */
    public function setPeriodoPagoRel($periodoPagoRel): void
    {
        $this->periodoPagoRel = $periodoPagoRel;
    }

    /**
     * @return mixed
     */
    public function getGrupoPagoRel()
    {
        return $this->grupoPagoRel;
    }

    /**
     * @param mixed $grupoPagoRel
     */
    public function setGrupoPagoRel($grupoPagoRel): void
    {
        $this->grupoPagoRel = $grupoPagoRel;
    }

    /**
     * @return mixed
     */
    public function getEmpleadoRel()
    {
        return $this->empleadoRel;
    }

    /**
     * @param mixed $empleadoRel
     */
    public function setEmpleadoRel($empleadoRel): void
    {
        $this->empleadoRel = $empleadoRel;
    }

    /**
     * @return mixed
     */
    public function getContratoRel()
    {
        return $this->contratoRel;
    }

    /**
     * @param mixed $contratoRel
     */
    public function setContratoRel($contratoRel): void
    {
        $this->contratoRel = $contratoRel;
    }

    /**
     * @return mixed
     */
    public function getProgramacionPagoRel()
    {
        return $this->programacionPagoRel;
    }

    /**
     * @param mixed $programacionPagoRel
     */
    public function setProgramacionPagoRel($programacionPagoRel): void
    {
        $this->programacionPagoRel = $programacionPagoRel;
    }

    /**
     * @return mixed
     */
    public function getPagosDetallesPagoRel()
    {
        return $this->pagosDetallesPagoRel;
    }

    /**
     * @param mixed $pagosDetallesPagoRel
     */
    public function setPagosDetallesPagoRel($pagosDetallesPagoRel): void
    {
        $this->pagosDetallesPagoRel = $pagosDetallesPagoRel;
    }



}
