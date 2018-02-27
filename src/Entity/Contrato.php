<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContratoRepository")
 */
class Contrato
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="codigo_contrato_pk" ,type="integer")
     */
    private $codigoContratoPk;

    /**
     * @ORM\Column(name="codigo_empleado_fk" , type="integer")
     */
    private $codigoEmpleadoFk;

    /**
     * @ORM\Column(name="codigo_grupo_pago_fk", type="integer")
     */
    private $codigoGrupoPagoFk;

    /**
     * @ORM\Column(name="codigo_contrato_tipo_fk" , type="integer")
     */
    private $codigoContratoTipoFk;

    /**
     * @ORM\Column(name="fecha_inicio_contrato" , type="date")
     */
    private $fechaInicioContrato;

    /**
     * @ORM\Column(name="fecha_fin_contrato" , type="date" )
     */
    private $fechaFinContrato;

    /**
     * @ORM\Column(name="codigo_tiempo_laborado_tipo_fk" , type="integer")
     */
    private $codigoTiempoLaboradoTipoFk;

    /**
     * @ORM\Column(name="codigo_salario_tipo_fk" , type="integer")
     */
    private $codigoSalarioTipoFk;

    /**
     * @ORM\Column(name="num_contrato" , type="string")
     */
    private $numeroContrato;

    /**
     * @ORM\Column(name="vr_salario" , type="float")
     */
    private $vrSalario;

    /**
     * @ORM\Column(name="auxilio_transporte" , type="boolean")
     */
    private $auxilioTransporte;

    /**
     * @ORM\Column(name="codigo_cargo_fk" , type="integer")
     */
    private $codigoCargoFk;

    /**
     * @ORM\Column(name="codigo_tipo_cotizante_fk" , type="integer")
     */
    private $codigoTipoCotizanteFk;

    /**
     * @ORM\Column(name="codigo_subtipo_ctizante_fk" , type="integer")
     */
    private $codigoSubtipoCtizanteFk;

    /**
     * @ORM\Column(name="codigo_tipo_pension_fk" , type="integer")
     */
    private $codigoTipoPensionFk;

    /**
     * @ORM\Column(name="codigo_tipo_salud_fk" , type="integer")
     */
    private $codigoTipoSaludFk;

    /**
     * @ORM\Column(name="codigo_clasificacion_riesgo_fk" , type="integer")
     */
    private $codigoClasificacionRiesgoFk;

    /**
     * @ORM\Column(name="codigo_entidad_salud_fk" , type="integer")
     */
    private $codigoEntidadSaludFk;

    /**
     * @ORM\Column(name="codigo_entidad_pension_fk" , type="integer")
     */
    private $codigoEntidadPensionFk;

    /**
     * @ORM\Column(name="codigo_entidad_cesantias_fk" , type="integer")
     */
    private $codigoEntidadCesantiasFk;

    /**
     * @ORM\Column(name="codigo_entidad_caja_fk" , type="integer")
     */
    private $codigoEntidadCajaFk;

    /**
     * @ORM\Column(name="codigo_ciudad_contrato_fk" , type="integer")
     */
    private $codigoCiudadContratoFk;

    /**
     * @ORM\Column(name="codigo_ciudad_labora_fk" , type="integer")
     */
    private $codigoCiudadLaboraFk;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_cesantias" , type="date")
     */
    private $fechaUltimoPagoCesantias;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_vacaciones" , type="date")
     */
    private $fechaUltimoPagoVacaciones;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_prima" , type="date")
     */
    private $fechaUltimoPagoPrima;

    /**
     * @ORM\Column(name="fecha_ultimo_pago" , type="date")
     */
    private $fechaUltimoPago;

    /**
     * @ORM\Column(name="ibp_cesantias_inicial" , type="float")
     */
    private $ibpCesantiasInicial;

    /**
     * @ORM\Column(name="ibp_prima_inicial" , type="float")
     */
    private $ibpPrimaInicial;

    /**
     * @ORM\Column(name="ibp_recargo_nocturno_inicial" , type="float")
     */
    private $ibpRecargoNocturnoInicial;

    /**
     * @ORM\Column(name="estado_activo" , type="boolean")
     */
    private $estadoActivo;

    /**
     * @ORM\Column(name="estado_terminado" , type="boolean")
     */
    private $estadoTerminado;

    /**
     * @ORM\Column(name="codigo_motivo_terminacion_fk" , type="integer")
     */
    private $codigoMotivoTerminacionFk;

    /**
     * @ORM\Column(name="comentarios_terminacion_fk" , type="integer")
     */
    private $comentariosTerminacionFk;

    /**
     * @ORM\Column(name="codigo_usuario_termina_fk" , type="string")
     */
    private $codigoUsuarioTerminaFk;

    /**
     * @ORM\Column(name="estado_liquidado" , type="boolean")
     */
    private $estadoLiquidado;

    /**
     * @return mixed
     */
    public function getCodigoContratoPk()
    {
        return $this->codigoContratoPk;
    }

    /**
     * @param mixed $codigoContratoPk
     */
    public function setCodigoContratoPk($codigoContratoPk): void
    {
        $this->codigoContratoPk = $codigoContratoPk;
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
    public function getCodigoContratoTipoFk()
    {
        return $this->codigoContratoTipoFk;
    }

    /**
     * @param mixed $codigoContratoTipoFk
     */
    public function setCodigoContratoTipoFk($codigoContratoTipoFk): void
    {
        $this->codigoContratoTipoFk = $codigoContratoTipoFk;
    }

    /**
     * @return mixed
     */
    public function getFechaInicioContrato()
    {
        return $this->fechaInicioContrato;
    }

    /**
     * @param mixed $fechaInicioContrato
     */
    public function setFechaInicioContrato($fechaInicioContrato): void
    {
        $this->fechaInicioContrato = $fechaInicioContrato;
    }

    /**
     * @return mixed
     */
    public function getFechaFinContrato()
    {
        return $this->fechaFinContrato;
    }

    /**
     * @param mixed $fechaFinContrato
     */
    public function setFechaFinContrato($fechaFinContrato): void
    {
        $this->fechaFinContrato = $fechaFinContrato;
    }

    /**
     * @return mixed
     */
    public function getCodigoTiempoLaboradoTipoFk()
    {
        return $this->codigoTiempoLaboradoTipoFk;
    }

    /**
     * @param mixed $codigoTiempoLaboradoTipoFk
     */
    public function setCodigoTiempoLaboradoTipoFk($codigoTiempoLaboradoTipoFk): void
    {
        $this->codigoTiempoLaboradoTipoFk = $codigoTiempoLaboradoTipoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoSalarioTipoFk()
    {
        return $this->codigoSalarioTipoFk;
    }

    /**
     * @param mixed $codigoSalarioTipoFk
     */
    public function setCodigoSalarioTipoFk($codigoSalarioTipoFk): void
    {
        $this->codigoSalarioTipoFk = $codigoSalarioTipoFk;
    }

    /**
     * @return mixed
     */
    public function getNumeroContrato()
    {
        return $this->numeroContrato;
    }

    /**
     * @param mixed $numeroContrato
     */
    public function setNumeroContrato($numeroContrato): void
    {
        $this->numeroContrato = $numeroContrato;
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
    public function getAuxilioTransporte()
    {
        return $this->auxilioTransporte;
    }

    /**
     * @param mixed $auxilioTransporte
     */
    public function setAuxilioTransporte($auxilioTransporte): void
    {
        $this->auxilioTransporte = $auxilioTransporte;
    }

    /**
     * @return mixed
     */
    public function getCodigoCargoFk()
    {
        return $this->codigoCargoFk;
    }

    /**
     * @param mixed $codigoCargoFk
     */
    public function setCodigoCargoFk($codigoCargoFk): void
    {
        $this->codigoCargoFk = $codigoCargoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoTipoCotizanteFk()
    {
        return $this->codigoTipoCotizanteFk;
    }

    /**
     * @param mixed $codigoTipoCotizanteFk
     */
    public function setCodigoTipoCotizanteFk($codigoTipoCotizanteFk): void
    {
        $this->codigoTipoCotizanteFk = $codigoTipoCotizanteFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoSubtipoCtizanteFk()
    {
        return $this->codigoSubtipoCtizanteFk;
    }

    /**
     * @param mixed $codigoSubtipoCtizanteFk
     */
    public function setCodigoSubtipoCtizanteFk($codigoSubtipoCtizanteFk): void
    {
        $this->codigoSubtipoCtizanteFk = $codigoSubtipoCtizanteFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoTipoPensionFk()
    {
        return $this->codigoTipoPensionFk;
    }

    /**
     * @param mixed $codigoTipoPensionFk
     */
    public function setCodigoTipoPensionFk($codigoTipoPensionFk): void
    {
        $this->codigoTipoPensionFk = $codigoTipoPensionFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoTipoSaludFk()
    {
        return $this->codigoTipoSaludFk;
    }

    /**
     * @param mixed $codigoTipoSaludFk
     */
    public function setCodigoTipoSaludFk($codigoTipoSaludFk): void
    {
        $this->codigoTipoSaludFk = $codigoTipoSaludFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoClasificacionRiesgoFk()
    {
        return $this->codigoClasificacionRiesgoFk;
    }

    /**
     * @param mixed $codigoClasificacionRiesgoFk
     */
    public function setCodigoClasificacionRiesgoFk($codigoClasificacionRiesgoFk): void
    {
        $this->codigoClasificacionRiesgoFk = $codigoClasificacionRiesgoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadSaludFk()
    {
        return $this->codigoEntidadSaludFk;
    }

    /**
     * @param mixed $codigoEntidadSaludFk
     */
    public function setCodigoEntidadSaludFk($codigoEntidadSaludFk): void
    {
        $this->codigoEntidadSaludFk = $codigoEntidadSaludFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadPensionFk()
    {
        return $this->codigoEntidadPensionFk;
    }

    /**
     * @param mixed $codigoEntidadPensionFk
     */
    public function setCodigoEntidadPensionFk($codigoEntidadPensionFk): void
    {
        $this->codigoEntidadPensionFk = $codigoEntidadPensionFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadCesantiasFk()
    {
        return $this->codigoEntidadCesantiasFk;
    }

    /**
     * @param mixed $codigoEntidadCesantiasFk
     */
    public function setCodigoEntidadCesantiasFk($codigoEntidadCesantiasFk): void
    {
        $this->codigoEntidadCesantiasFk = $codigoEntidadCesantiasFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEntidadCajaFk()
    {
        return $this->codigoEntidadCajaFk;
    }

    /**
     * @param mixed $codigoEntidadCajaFk
     */
    public function setCodigoEntidadCajaFk($codigoEntidadCajaFk): void
    {
        $this->codigoEntidadCajaFk = $codigoEntidadCajaFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoCiudadContratoFk()
    {
        return $this->codigoCiudadContratoFk;
    }

    /**
     * @param mixed $codigoCiudadContratoFk
     */
    public function setCodigoCiudadContratoFk($codigoCiudadContratoFk): void
    {
        $this->codigoCiudadContratoFk = $codigoCiudadContratoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoCiudadLaboraFk()
    {
        return $this->codigoCiudadLaboraFk;
    }

    /**
     * @param mixed $codigoCiudadLaboraFk
     */
    public function setCodigoCiudadLaboraFk($codigoCiudadLaboraFk): void
    {
        $this->codigoCiudadLaboraFk = $codigoCiudadLaboraFk;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimoPagoCesantias()
    {
        return $this->fechaUltimoPagoCesantias;
    }

    /**
     * @param mixed $fechaUltimoPagoCesantias
     */
    public function setFechaUltimoPagoCesantias($fechaUltimoPagoCesantias): void
    {
        $this->fechaUltimoPagoCesantias = $fechaUltimoPagoCesantias;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimoPagoVacaciones()
    {
        return $this->fechaUltimoPagoVacaciones;
    }

    /**
     * @param mixed $fechaUltimoPagoVacaciones
     */
    public function setFechaUltimoPagoVacaciones($fechaUltimoPagoVacaciones): void
    {
        $this->fechaUltimoPagoVacaciones = $fechaUltimoPagoVacaciones;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimoPagoPrima()
    {
        return $this->fechaUltimoPagoPrima;
    }

    /**
     * @param mixed $fechaUltimoPagoPrima
     */
    public function setFechaUltimoPagoPrima($fechaUltimoPagoPrima): void
    {
        $this->fechaUltimoPagoPrima = $fechaUltimoPagoPrima;
    }

    /**
     * @return mixed
     */
    public function getFechaUltimoPago()
    {
        return $this->fechaUltimoPago;
    }

    /**
     * @param mixed $fechaUltimoPago
     */
    public function setFechaUltimoPago($fechaUltimoPago): void
    {
        $this->fechaUltimoPago = $fechaUltimoPago;
    }

    /**
     * @return mixed
     */
    public function getIbpCesantiasInicial()
    {
        return $this->ibpCesantiasInicial;
    }

    /**
     * @param mixed $ibpCesantiasInicial
     */
    public function setIbpCesantiasInicial($ibpCesantiasInicial): void
    {
        $this->ibpCesantiasInicial = $ibpCesantiasInicial;
    }

    /**
     * @return mixed
     */
    public function getIbpPrimaInicial()
    {
        return $this->ibpPrimaInicial;
    }

    /**
     * @param mixed $ibpPrimaInicial
     */
    public function setIbpPrimaInicial($ibpPrimaInicial): void
    {
        $this->ibpPrimaInicial = $ibpPrimaInicial;
    }

    /**
     * @return mixed
     */
    public function getIbpRecargoNocturnoInicial()
    {
        return $this->ibpRecargoNocturnoInicial;
    }

    /**
     * @param mixed $ibpRecargoNocturnoInicial
     */
    public function setIbpRecargoNocturnoInicial($ibpRecargoNocturnoInicial): void
    {
        $this->ibpRecargoNocturnoInicial = $ibpRecargoNocturnoInicial;
    }

    /**
     * @return mixed
     */
    public function getEstadoActivo()
    {
        return $this->estadoActivo;
    }

    /**
     * @param mixed $estadoActivo
     */
    public function setEstadoActivo($estadoActivo): void
    {
        $this->estadoActivo = $estadoActivo;
    }

    /**
     * @return mixed
     */
    public function getEstadoTerminado()
    {
        return $this->estadoTerminado;
    }

    /**
     * @param mixed $estadoTerminado
     */
    public function setEstadoTerminado($estadoTerminado): void
    {
        $this->estadoTerminado = $estadoTerminado;
    }

    /**
     * @return mixed
     */
    public function getCodigoMotivoTerminacionFk()
    {
        return $this->codigoMotivoTerminacionFk;
    }

    /**
     * @param mixed $codigoMotivoTerminacionFk
     */
    public function setCodigoMotivoTerminacionFk($codigoMotivoTerminacionFk): void
    {
        $this->codigoMotivoTerminacionFk = $codigoMotivoTerminacionFk;
    }

    /**
     * @return mixed
     */
    public function getComentariosTerminacionFk()
    {
        return $this->comentariosTerminacionFk;
    }

    /**
     * @param mixed $comentariosTerminacionFk
     */
    public function setComentariosTerminacionFk($comentariosTerminacionFk): void
    {
        $this->comentariosTerminacionFk = $comentariosTerminacionFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoUsuarioTerminaFk()
    {
        return $this->codigoUsuarioTerminaFk;
    }

    /**
     * @param mixed $codigoUsuarioTerminaFk
     */
    public function setCodigoUsuarioTerminaFk($codigoUsuarioTerminaFk): void
    {
        $this->codigoUsuarioTerminaFk = $codigoUsuarioTerminaFk;
    }

    /**
     * @return mixed
     */
    public function getEstadoLiquidado()
    {
        return $this->estadoLiquidado;
    }

    /**
     * @param mixed $estadoLiquidado
     */
    public function setEstadoLiquidado($estadoLiquidado): void
    {
        $this->estadoLiquidado = $estadoLiquidado;
    }


}

