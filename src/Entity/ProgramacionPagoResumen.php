<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProgramacionPagoResumenRepository")
 */
class ProgramacionPagoResumen
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_programacion_pago_resumen_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoProgramacionPagoResumenPk;

    /**
     * @ORM\Column(name="codigo_programacion_pago_fk", type="integer", nullable=true)
     */
    private $codigoProgramacionPagoFk;

    /**
     * @ORM\Column(name="codigo_empleado_fk", type="integer", nullable=true)
     */
    private $codigoEmpleadoFk;

    /**
     * @ORM\Column(name="codigo_contrato_fk", type="integer", nullable=true)
     */
    private $codigoContratoFk;

    /**
     * @ORM\Column(name="horas_periodo", type="integer")
     */
    private $horasPeriodo = 0;

    /**
     * @ORM\Column(name="dias_reales", type="integer")
     */
    private $diasReales = 0;

    /**
     * @ORM\Column(name="dias", type="integer")
     */
    private $dias = 0;

    /**
     * Para el auxilio de transporte
     * @ORM\Column(name="dias_transporte", type="integer")
     */
    private $diasTransporte = 0;

    /**
     * @ORM\Column(name="horas_periodo_reales", type="integer")
     */
    private $horasPeriodoReales = 0;

    /**
     * @ORM\Column(name="vr_salario", type="float")
     */
    private $vrSalario = 0;

    /**
     * @ORM\Column(name="vr_anticipo", type="float" , nullable=true)
     */
    private $VrAnticipo = 0;

    /**
     * @ORM\Column(name="vr_salario_prima", type="float")
     */
    private $vrSalarioPrima = 0;

    /**
     * @ORM\Column(name="vr_salario_cesantia", type="float")
     */
    private $vrSalarioCesantia = 0;

    /**
     * @ORM\Column(name="fecha_desde", type="date", nullable=true)
     */
    private $fechaDesde;

    /**
     * @ORM\Column(name="fecha_hasta", type="date", nullable=true)
     */
    private $fechaHasta;

    /**
     * @ORM\Column(name="fecha_desde_pago", type="date", nullable=true)
     */
    private $fechaDesdePago;

    /**
     * @ORM\Column(name="fecha_hasta_pago", type="date", nullable=true)
     */
    private $fechaHastaPago;

    /**
     * @ORM\Column(name="vr_devengado", type="float")
     */
    private $vrDevengado = 0;

    /**
     * @ORM\Column(name="vr_deducciones", type="float", nullable=true)
     */
    private $vrDeducciones = 0;

    /**
     * @ORM\Column(name="vr_dia", type="float")
     */
    private $vrDia = 0;

    /**
     * @ORM\Column(name="vr_hora", type="float")
     */
    private $vrHora = 0;

    /**
     * @ORM\Column(name="vr_neto_pagar", type="float", nullable=true)
     */
    private $vrNetoPagar = 0;

    /**
     * @ORM\Column(name="pagoSalario", type="boolean", nullable=true)
     */
    private $pagoSalario = true;

    /**
     * @ORM\Column(name="descuento_salud", type="boolean")
     */
    private $descuentoSalud = true;

    /**
     * @ORM\Column(name="descuento_pension", type="boolean")
     */
    private $descuentoPension = true;

    /**
     * @ORM\Column(name="pago_auxilio_transporte", type="boolean")
     */
    private $pagoAuxilioTransporte = true;

    /**
     * @ORM\Column(name="dias_incapacidad", type="integer")
     */
    private $diasIncapacidad = 0;

    /**
     * @ORM\Column(name="dias_licencia", type="integer")
     */
    private $diasLicencia = 0;

    /**
     * @ORM\Column(name="dias_vacaciones", type="integer")
     */
    private $diasVacaciones = 0;

    /**
     * @ORM\Column(name="ibc_vacaciones", type="float")
     */
    private $ibcVacaciones = 0;

    /**
     * @ORM\Column(name="horas_descanso", type="float")
     */
    private $horasDescanso = 0;

    /**
     * @ORM\Column(name="horas_diurnas", type="float")
     */
    private $horasDiurnas = 0;

    /**
     * @ORM\Column(name="horas_nocturnas", type="float")
     */
    private $horasNocturnas = 0;

    /**
     * @ORM\Column(name="horas_festivas_diurnas", type="float")
     */
    private $horasFestivasDiurnas = 0;

    /**
     * @ORM\Column(name="horas_festivas_nocturnas", type="float")
     */
    private $horasFestivasNocturnas = 0;

    /**
     * @ORM\Column(name="horas_recargo_nocturno", type="float")
     */
    private $horasRecargoNocturno = 0;

    /**
     * @ORM\Column(name="horas_recargo_festivo_diurno", type="float")
     */
    private $horasRecargoFestivoDiurno = 0;

    /**
     * @ORM\Column(name="horas_recargo_festivo_nocturno", type="float")
     */
    private $horasRecargoFestivoNocturno = 0;

    /**
     * @ORM\Column(name="horas_extras_ordinarias_diurnas", type="float")
     */
    private $horasExtrasOrdinariasDiurnas = 0;

    /**
     * @ORM\Column(name="horas_extras_ordinarias_nocturnas", type="float")
     */
    private $horasExtrasOrdinariasNocturnas = 0;

    /**
     * @ORM\Column(name="horas_extras_festivas_diurnas", type="float")
     */
    private $horasExtrasFestivasDiurnas = 0;

    /**
     * @ORM\Column(name="horas_extras_festivas_nocturnas", type="float")
     */
    private $horasExtrasFestivasNocturnas = 0;

    /**
     * @ORM\Column(name="horas_novedad", type="float")
     */
    private $horasNovedad = 0;

    /**
     * @ORM\Column(name="comentarios", type="string", length=150, nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(name="vr_ajuste_devengado", type="float")
     */
    private $vrAjusteDevengado = 0;

    /**
     * @ORM\Column(name="vr_ajuste_recargo", type="float", nullable=true)
     */
    private $vrAjusteRecargo = 0;

    /**
     * @ORM\Column(name="vr_neto_pagar_propuesto", type="float", nullable=true)
     */
    private $vrNetoPagarPropuesto = 0;

    /**
     * @ORM\Column(name="salario_horas", type="boolean", nullable=true)
     */
    private $salarioHoras = false;

    /**
     * @ORM\Column(name="salario_basico", type="boolean", nullable=true)
     */
    private $salarioBasico = 0;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ProgramacionPago", inversedBy="programacionesPagosDetallesRel")
     * @ORM\JoinColumn(name="codigo_programacion_pago_fk", referencedColumnName="codigo_programacion_pago_pk")
     */
    protected $programacionPagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Empleado", inversedBy="programacionesPagosDetallesEmpleadoRel")
     * @ORM\JoinColumn(name="codigo_empleado_fk", referencedColumnName="codigo_empleado_pk")
     */
    protected $empleadoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Contrato", inversedBy="programacionesPagosDetallesContratoRel")
     * @ORM\JoinColumn(name="codigo_contrato_fk", referencedColumnName="codigo_contrato_pk")
     */
    protected $contratoRel;

    /**
     * @return mixed
     */
    public function getCodigoProgramacionPagoResumenPk()
    {
        return $this->codigoProgramacionPagoResumenPk;
    }

    /**
     * @param mixed $codigoProgramacionPagoResumenPk
     */
    public function setCodigoProgramacionPagoResumenPk($codigoProgramacionPagoResumenPk): void
    {
        $this->codigoProgramacionPagoResumenPk = $codigoProgramacionPagoResumenPk;
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
    public function getHorasPeriodo()
    {
        return $this->horasPeriodo;
    }

    /**
     * @param mixed $horasPeriodo
     */
    public function setHorasPeriodo($horasPeriodo): void
    {
        $this->horasPeriodo = $horasPeriodo;
    }

    /**
     * @return mixed
     */
    public function getDiasReales()
    {
        return $this->diasReales;
    }

    /**
     * @param mixed $diasReales
     */
    public function setDiasReales($diasReales): void
    {
        $this->diasReales = $diasReales;
    }

    /**
     * @return mixed
     */
    public function getDias()
    {
        return $this->dias;
    }

    /**
     * @param mixed $dias
     */
    public function setDias($dias): void
    {
        $this->dias = $dias;
    }

    /**
     * @return mixed
     */
    public function getDiasTransporte()
    {
        return $this->diasTransporte;
    }

    /**
     * @param mixed $diasTransporte
     */
    public function setDiasTransporte($diasTransporte): void
    {
        $this->diasTransporte = $diasTransporte;
    }

    /**
     * @return mixed
     */
    public function getHorasPeriodoReales()
    {
        return $this->horasPeriodoReales;
    }

    /**
     * @param mixed $horasPeriodoReales
     */
    public function setHorasPeriodoReales($horasPeriodoReales): void
    {
        $this->horasPeriodoReales = $horasPeriodoReales;
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
    public function getVrAnticipo()
    {
        return $this->VrAnticipo;
    }

    /**
     * @param mixed $VrAnticipo
     */
    public function setVrAnticipo($VrAnticipo): void
    {
        $this->VrAnticipo = $VrAnticipo;
    }

    /**
     * @return mixed
     */
    public function getVrSalarioPrima()
    {
        return $this->vrSalarioPrima;
    }

    /**
     * @param mixed $vrSalarioPrima
     */
    public function setVrSalarioPrima($vrSalarioPrima): void
    {
        $this->vrSalarioPrima = $vrSalarioPrima;
    }

    /**
     * @return mixed
     */
    public function getVrSalarioCesantia()
    {
        return $this->vrSalarioCesantia;
    }

    /**
     * @param mixed $vrSalarioCesantia
     */
    public function setVrSalarioCesantia($vrSalarioCesantia): void
    {
        $this->vrSalarioCesantia = $vrSalarioCesantia;
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
    public function getFechaDesdePago()
    {
        return $this->fechaDesdePago;
    }

    /**
     * @param mixed $fechaDesdePago
     */
    public function setFechaDesdePago($fechaDesdePago): void
    {
        $this->fechaDesdePago = $fechaDesdePago;
    }

    /**
     * @return mixed
     */
    public function getFechaHastaPago()
    {
        return $this->fechaHastaPago;
    }

    /**
     * @param mixed $fechaHastaPago
     */
    public function setFechaHastaPago($fechaHastaPago): void
    {
        $this->fechaHastaPago = $fechaHastaPago;
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
    public function getVrNetoPagar()
    {
        return $this->vrNetoPagar;
    }

    /**
     * @param mixed $vrNetoPagar
     */
    public function setVrNetoPagar($vrNetoPagar): void
    {
        $this->vrNetoPagar = $vrNetoPagar;
    }

    /**
     * @return mixed
     */
    public function getPagoSalario()
    {
        return $this->pagoSalario;
    }

    /**
     * @param mixed $pagoSalario
     */
    public function setPagoSalario($pagoSalario): void
    {
        $this->pagoSalario = $pagoSalario;
    }

    /**
     * @return mixed
     */
    public function getDescuentoSalud()
    {
        return $this->descuentoSalud;
    }

    /**
     * @param mixed $descuentoSalud
     */
    public function setDescuentoSalud($descuentoSalud): void
    {
        $this->descuentoSalud = $descuentoSalud;
    }

    /**
     * @return mixed
     */
    public function getDescuentoPension()
    {
        return $this->descuentoPension;
    }

    /**
     * @param mixed $descuentoPension
     */
    public function setDescuentoPension($descuentoPension): void
    {
        $this->descuentoPension = $descuentoPension;
    }

    /**
     * @return mixed
     */
    public function getPagoAuxilioTransporte()
    {
        return $this->pagoAuxilioTransporte;
    }

    /**
     * @param mixed $pagoAuxilioTransporte
     */
    public function setPagoAuxilioTransporte($pagoAuxilioTransporte): void
    {
        $this->pagoAuxilioTransporte = $pagoAuxilioTransporte;
    }

    /**
     * @return mixed
     */
    public function getDiasIncapacidad()
    {
        return $this->diasIncapacidad;
    }

    /**
     * @param mixed $diasIncapacidad
     */
    public function setDiasIncapacidad($diasIncapacidad): void
    {
        $this->diasIncapacidad = $diasIncapacidad;
    }

    /**
     * @return mixed
     */
    public function getDiasLicencia()
    {
        return $this->diasLicencia;
    }

    /**
     * @param mixed $diasLicencia
     */
    public function setDiasLicencia($diasLicencia): void
    {
        $this->diasLicencia = $diasLicencia;
    }

    /**
     * @return mixed
     */
    public function getDiasVacaciones()
    {
        return $this->diasVacaciones;
    }

    /**
     * @param mixed $diasVacaciones
     */
    public function setDiasVacaciones($diasVacaciones): void
    {
        $this->diasVacaciones = $diasVacaciones;
    }

    /**
     * @return mixed
     */
    public function getIbcVacaciones()
    {
        return $this->ibcVacaciones;
    }

    /**
     * @param mixed $ibcVacaciones
     */
    public function setIbcVacaciones($ibcVacaciones): void
    {
        $this->ibcVacaciones = $ibcVacaciones;
    }

    /**
     * @return mixed
     */
    public function getHorasDescanso()
    {
        return $this->horasDescanso;
    }

    /**
     * @param mixed $horasDescanso
     */
    public function setHorasDescanso($horasDescanso): void
    {
        $this->horasDescanso = $horasDescanso;
    }

    /**
     * @return mixed
     */
    public function getHorasDiurnas()
    {
        return $this->horasDiurnas;
    }

    /**
     * @param mixed $horasDiurnas
     */
    public function setHorasDiurnas($horasDiurnas): void
    {
        $this->horasDiurnas = $horasDiurnas;
    }

    /**
     * @return mixed
     */
    public function getHorasNocturnas()
    {
        return $this->horasNocturnas;
    }

    /**
     * @param mixed $horasNocturnas
     */
    public function setHorasNocturnas($horasNocturnas): void
    {
        $this->horasNocturnas = $horasNocturnas;
    }

    /**
     * @return mixed
     */
    public function getHorasFestivasDiurnas()
    {
        return $this->horasFestivasDiurnas;
    }

    /**
     * @param mixed $horasFestivasDiurnas
     */
    public function setHorasFestivasDiurnas($horasFestivasDiurnas): void
    {
        $this->horasFestivasDiurnas = $horasFestivasDiurnas;
    }

    /**
     * @return mixed
     */
    public function getHorasFestivasNocturnas()
    {
        return $this->horasFestivasNocturnas;
    }

    /**
     * @param mixed $horasFestivasNocturnas
     */
    public function setHorasFestivasNocturnas($horasFestivasNocturnas): void
    {
        $this->horasFestivasNocturnas = $horasFestivasNocturnas;
    }

    /**
     * @return mixed
     */
    public function getHorasRecargoNocturno()
    {
        return $this->horasRecargoNocturno;
    }

    /**
     * @param mixed $horasRecargoNocturno
     */
    public function setHorasRecargoNocturno($horasRecargoNocturno): void
    {
        $this->horasRecargoNocturno = $horasRecargoNocturno;
    }

    /**
     * @return mixed
     */
    public function getHorasRecargoFestivoDiurno()
    {
        return $this->horasRecargoFestivoDiurno;
    }

    /**
     * @param mixed $horasRecargoFestivoDiurno
     */
    public function setHorasRecargoFestivoDiurno($horasRecargoFestivoDiurno): void
    {
        $this->horasRecargoFestivoDiurno = $horasRecargoFestivoDiurno;
    }

    /**
     * @return mixed
     */
    public function getHorasRecargoFestivoNocturno()
    {
        return $this->horasRecargoFestivoNocturno;
    }

    /**
     * @param mixed $horasRecargoFestivoNocturno
     */
    public function setHorasRecargoFestivoNocturno($horasRecargoFestivoNocturno): void
    {
        $this->horasRecargoFestivoNocturno = $horasRecargoFestivoNocturno;
    }

    /**
     * @return mixed
     */
    public function getHorasExtrasOrdinariasDiurnas()
    {
        return $this->horasExtrasOrdinariasDiurnas;
    }

    /**
     * @param mixed $horasExtrasOrdinariasDiurnas
     */
    public function setHorasExtrasOrdinariasDiurnas($horasExtrasOrdinariasDiurnas): void
    {
        $this->horasExtrasOrdinariasDiurnas = $horasExtrasOrdinariasDiurnas;
    }

    /**
     * @return mixed
     */
    public function getHorasExtrasOrdinariasNocturnas()
    {
        return $this->horasExtrasOrdinariasNocturnas;
    }

    /**
     * @param mixed $horasExtrasOrdinariasNocturnas
     */
    public function setHorasExtrasOrdinariasNocturnas($horasExtrasOrdinariasNocturnas): void
    {
        $this->horasExtrasOrdinariasNocturnas = $horasExtrasOrdinariasNocturnas;
    }

    /**
     * @return mixed
     */
    public function getHorasExtrasFestivasDiurnas()
    {
        return $this->horasExtrasFestivasDiurnas;
    }

    /**
     * @param mixed $horasExtrasFestivasDiurnas
     */
    public function setHorasExtrasFestivasDiurnas($horasExtrasFestivasDiurnas): void
    {
        $this->horasExtrasFestivasDiurnas = $horasExtrasFestivasDiurnas;
    }

    /**
     * @return mixed
     */
    public function getHorasExtrasFestivasNocturnas()
    {
        return $this->horasExtrasFestivasNocturnas;
    }

    /**
     * @param mixed $horasExtrasFestivasNocturnas
     */
    public function setHorasExtrasFestivasNocturnas($horasExtrasFestivasNocturnas): void
    {
        $this->horasExtrasFestivasNocturnas = $horasExtrasFestivasNocturnas;
    }

    /**
     * @return mixed
     */
    public function getHorasNovedad()
    {
        return $this->horasNovedad;
    }

    /**
     * @param mixed $horasNovedad
     */
    public function setHorasNovedad($horasNovedad): void
    {
        $this->horasNovedad = $horasNovedad;
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
    public function getVrAjusteDevengado()
    {
        return $this->vrAjusteDevengado;
    }

    /**
     * @param mixed $vrAjusteDevengado
     */
    public function setVrAjusteDevengado($vrAjusteDevengado): void
    {
        $this->vrAjusteDevengado = $vrAjusteDevengado;
    }

    /**
     * @return mixed
     */
    public function getVrAjusteRecargo()
    {
        return $this->vrAjusteRecargo;
    }

    /**
     * @param mixed $vrAjusteRecargo
     */
    public function setVrAjusteRecargo($vrAjusteRecargo): void
    {
        $this->vrAjusteRecargo = $vrAjusteRecargo;
    }

    /**
     * @return mixed
     */
    public function getVrNetoPagarPropuesto()
    {
        return $this->vrNetoPagarPropuesto;
    }

    /**
     * @param mixed $vrNetoPagarPropuesto
     */
    public function setVrNetoPagarPropuesto($vrNetoPagarPropuesto): void
    {
        $this->vrNetoPagarPropuesto = $vrNetoPagarPropuesto;
    }

    /**
     * @return mixed
     */
    public function getSalarioHoras()
    {
        return $this->salarioHoras;
    }

    /**
     * @param mixed $salarioHoras
     */
    public function setSalarioHoras($salarioHoras): void
    {
        $this->salarioHoras = $salarioHoras;
    }

    /**
     * @return mixed
     */
    public function getSalarioBasico()
    {
        return $this->salarioBasico;
    }

    /**
     * @param mixed $salarioBasico
     */
    public function setSalarioBasico($salarioBasico): void
    {
        $this->salarioBasico = $salarioBasico;
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



}
