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
     * @ORM\Column(name="codigo_empleado_fk" , type="integer", nullable=false)
     */
    private $codigoEmpleadoFk;

    /**
     * @ORM\Column(name="codigo_grupo_pago_fk", type="integer" , nullable=true)
     */
    private $codigoGrupoPagoFk;

    /**
     * @ORM\Column(name="codigo_contrato_tipo_fk" , type="integer" , nullable=false)
     */
    private $codigoContratoTipoFk;

    /**
     * @ORM\Column(name="fecha_inicio_contrato" , type="date" , nullable=false)
     */
    private $fechaInicioContrato;

    /**
     * @ORM\Column(name="fecha_fin_contrato" , type="date" , nullable=true)
     */
    private $fechaFinContrato;

    /**
     * @ORM\Column(name="codigo_tiempo_laborado_tipo_fk" , type="integer" , nullable=false)
     */
    private $codigoTiempoLaboradoTipoFk;

    /**
     * @ORM\Column(name="codigo_salario_tipo_fk" , type="integer" , nullable=false)
     */
    private $codigoSalarioTipoFk;

    /**
     * @ORM\Column(name="num_contrato" , type="string" , nullable=true)
     */
    private $numeroContrato;

    /**
     * @ORM\Column(name="vr_salario" , type="float" , nullable=false)
     */
    private $vrSalario;

    /**
     * @ORM\Column(name="auxilio_transporte" , type="boolean" , nullable=true)
     */
    private $auxilioTransporte;

    /**
     * @ORM\Column(name="codigo_cargo_fk" , type="integer" , nullable=true)
     */
    private $codigoCargoFk;

    /**
     * @ORM\Column(name="codigo_tipo_cotizante_fk" , type="integer" , nullable=true)
     */
    private $codigoTipoCotizanteFk;

    /**
     * @ORM\Column(name="codigo_subtipo_cotizante_fk" , type="integer" , nullable=true)
     */
    private $codigoSubtipoCotizanteFk;

    /**
     * @ORM\Column(name="codigo_tipo_pension_fk" , type="integer" , nullable=true)
     */
    private $codigoTipoPensionFk;

    /**
     * @ORM\Column(name="codigo_tipo_salud_fk" , type="integer" , nullable=true)
     */
    private $codigoTipoSaludFk;

    /**
     * @ORM\Column(name="codigo_clasificacion_riesgo_fk" , type="integer" , nullable=true)
     */
    private $codigoClasificacionRiesgoFk;

    /**
     * @ORM\Column(name="codigo_entidad_salud_fk" , type="integer" , nullable=true)
     */
    private $codigoEntidadSaludFk;

    /**
     * @ORM\Column(name="codigo_entidad_pension_fk" , type="integer" , nullable=true)
     */
    private $codigoEntidadPensionFk;

    /**
     * @ORM\Column(name="codigo_entidad_cesantias_fk" , type="integer" , nullable=true)
     */
    private $codigoEntidadCesantiasFk;

    /**
     * @ORM\Column(name="codigo_entidad_caja_fk" , type="integer" , nullable=true)
     */
    private $codigoEntidadCajaFk;

    /**
     * @ORM\Column(name="codigo_ciudad_contrato_fk" , type="integer" , nullable=true)
     */
    private $codigoCiudadContratoFk;

    /**
     * @ORM\Column(name="codigo_ciudad_labora_fk" , type="integer" , nullable=true)
     */
    private $codigoCiudadLaboraFk;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_cesantias" , type="date" , nullable=true)
     */
    private $fechaUltimoPagoCesantias;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_vacaciones" , type="date" , nullable=true)
     */
    private $fechaUltimoPagoVacaciones;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_prima" , type="date" , nullable=true)
     */
    private $fechaUltimoPagoPrima;

    /**
     * @ORM\Column(name="fecha_ultimo_pago" , type="date" , nullable=true)
     */
    private $fechaUltimoPago;

    /**
     * @ORM\Column(name="ibp_cesantias_inicial" , type="float" , nullable=true)
     */
    private $ibpCesantiasInicial;

    /**
     * @ORM\Column(name="ibp_prima_inicial" , type="float" , nullable=true)
     */
    private $ibpPrimaInicial;

    /**
     * @ORM\Column(name="ibp_recargo_nocturno_inicial" , type="float" , nullable=true)
     */
    private $ibpRecargoNocturnoInicial;

    /**
     * @ORM\Column(name="estado_activo" , type="boolean" , nullable=true)
     */
    private $estadoActivo;

    /**
     * @ORM\Column(name="estado_terminado" , type="boolean" , nullable=true)
     */
    private $estadoTerminado;

    /**
     * @ORM\Column(name="codigo_motivo_terminacion_fk" , type="integer" , nullable=true)
     */
    private $codigoMotivoTerminacionFk;

    /**
     * @ORM\Column(name="comentario_terminacion" , type="integer" , nullable=true)
     */
    private $comentarioTerminacion;

    /**
     * @ORM\Column(name="codigo_usuario_termina_fk" , type="string" , nullable=true)
     */
    private $codigoUsuarioTerminaFk;

    /**
     * @ORM\Column(name="estado_liquidado" , type="boolean" , nullable=true)
     */
    private $estadoLiquidado;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Empleado", inversedBy="contratoContratoRel")
     * @ORM\JoinColumn(name="codigo_empleado_fk", referencedColumnName="codigo_empleado_pk")
     */
    private $contratoEmpleadoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrupoPago", inversedBy="contratoGrupoPagoRel")
     * @ORM\JoinColumn(name="codigo_grupo_pago_fk", referencedColumnName="codigo_grupo_pago_pk")
     */
    private $grupoPagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ContratoTipo", inversedBy="contratoContratoTipoRel")
     * @ORM\JoinColumn(name="codigo_contrato_tipo_fk", referencedColumnName="codigo_contrato_tipo_pk")
     */
    private $contratoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TiempoLaboradoTipo", inversedBy="contratoTiempoLaboradoTipoRel")
     * @ORM\JoinColumn(name="codigo_tiempo_laborado_tipo_fk", referencedColumnName="codigo_tiempo_laborado_pk")
     */
    private $tiempoLaboradoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SalarioTipo", inversedBy="contratoSalarioTipoRel")
     * @ORM\JoinColumn(name="codigo_salario_tipo_fk", referencedColumnName="codigo_salario_tipo_pk")
     */
    private $salarioTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cargo", inversedBy="contratoCargoRel")
     * @ORM\JoinColumn(name="codigo_cargo_fk", referencedColumnName="codigo_cargo_pk")
     */
    private $cargoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SStipoCotizante", inversedBy="contratoSStipoCotizanteRel")
     * @ORM\JoinColumn(name="codigo_tipo_cotizante_fk", referencedColumnName="codigo_tipo_cotizante_pk")
     */
    private $ssTipoCotizanteRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SSsubTipoContizante", inversedBy="contratoSSsubtipoCotizanteRel")
     * @ORM\JoinColumn(name="codigo_subtipo_cotizante_fk", referencedColumnName="codigo_subtipo_cotizante_pk")
     */
    private $ssSubtipoCotizanteRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SStipoPension", inversedBy="contratoSStipoPensionRel")
     * @ORM\JoinColumn(name="codigo_tipo_pension_fk", referencedColumnName="codigo_tipo_pension_pk")
     */
    private $ssTipoPensionRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SStipoSalud", inversedBy="contratoSStipoSaludRel")
     * @ORM\JoinColumn(name="codigo_tipo_salud_fk", referencedColumnName="codigo_tipo_salud_pk")
     */
    private $ssTipoSaludRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\SSclasificacionRiesgo", inversedBy="contratoSSclasificacionRiesgoRel")
     * @ORM\JoinColumn(name="codigo_clasificacion_riesgo_fk", referencedColumnName="codigo_clasificacion_riesgo_pk")
     */
    private $ssClasificacionRiesgoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntidadPension", inversedBy="contratoEntidadPensionRel")
     * @ORM\JoinColumn(name="codigo_entidad_pension_fk", referencedColumnName="codigo_entidad_pension_pk")
     */
    private $entidadPensionRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntidadSalud", inversedBy="contratoEntidadSaludRel")
     * @ORM\JoinColumn(name="codigo_entidad_salud_fk", referencedColumnName="codigo_entidad_salud_pk")
     */
    private $entidadSaludRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntidadCesantias", inversedBy="contratoEntidadCesantiasRel")
     * @ORM\JoinColumn(name="codigo_entidad_cesantias_fk", referencedColumnName="codigo_entidad_cesantias_pk")
     */
    private $entidadCesantiasRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntidadCaja", inversedBy="contratoEntidadCajaRel")
     * @ORM\JoinColumn(name="codigo_entidad_caja_fk", referencedColumnName="codigo_entidad_caja_pk")
     */
    private $entidadCajaRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad", inversedBy="contratoCiudadContratoRel")
     * @ORM\JoinColumn(name="codigo_ciudad_contrato_fk", referencedColumnName="codigo_ciudad_pk")
     */
    private $ciudadContratoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad", inversedBy="contratoCiudadLaboraRel")
     * @ORM\JoinColumn(name="codigo_ciudad_labora_fk", referencedColumnName="codigo_ciudad_pk")
     */
    private $ciudadLaboraRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\ContratoMotivoTerminacion", inversedBy="contratoMotivoTerminacionRel")
     * @ORM\JoinColumn(name="codigo_motivo_terminacion_fk", referencedColumnName="codigo_contrato_motivo_terminacion_pk")
     */
    private $motivoTerminacionRel;

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
    public function getCodigoSubtipoCotizanteFk()
    {
        return $this->codigoSubtipoCotizanteFk;
    }

    /**
     * @param mixed $codigoSubtipoCotizanteFk
     */
    public function setCodigoSubtipoCotizanteFk($codigoSubtipoCotizanteFk): void
    {
        $this->codigoSubtipoCotizanteFk = $codigoSubtipoCotizanteFk;
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
    public function getComentarioTerminacion()
    {
        return $this->comentarioTerminacion;
    }

    /**
     * @param mixed $comentarioTerminacion
     */
    public function setComentarioTerminacion($comentarioTerminacion): void
    {
        $this->comentarioTerminacion = $comentarioTerminacion;
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

    /**
     * @return mixed
     */
    public function getContratoEmpleadoRel()
    {
        return $this->contratoEmpleadoRel;
    }

    /**
     * @param mixed $contratoEmpleadoRel
     */
    public function setContratoEmpleadoRel($contratoEmpleadoRel): void
    {
        $this->contratoEmpleadoRel = $contratoEmpleadoRel;
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
    public function getContratoTipoRel()
    {
        return $this->contratoTipoRel;
    }

    /**
     * @param mixed $contratoTipoRel
     */
    public function setContratoTipoRel($contratoTipoRel): void
    {
        $this->contratoTipoRel = $contratoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getTiempoLaboradoTipoRel()
    {
        return $this->tiempoLaboradoTipoRel;
    }

    /**
     * @param mixed $tiempoLaboradoTipoRel
     */
    public function setTiempoLaboradoTipoRel($tiempoLaboradoTipoRel): void
    {
        $this->tiempoLaboradoTipoRel = $tiempoLaboradoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getSalarioTipoRel()
    {
        return $this->salarioTipoRel;
    }

    /**
     * @param mixed $salarioTipoRel
     */
    public function setSalarioTipoRel($salarioTipoRel): void
    {
        $this->salarioTipoRel = $salarioTipoRel;
    }

    /**
     * @return mixed
     */
    public function getCargoRel()
    {
        return $this->cargoRel;
    }

    /**
     * @param mixed $cargoRel
     */
    public function setCargoRel($cargoRel): void
    {
        $this->cargoRel = $cargoRel;
    }

    /**
     * @return mixed
     */
    public function getSsTipoCotizanteRel()
    {
        return $this->ssTipoCotizanteRel;
    }

    /**
     * @param mixed $ssTipoCotizanteRel
     */
    public function setSsTipoCotizanteRel($ssTipoCotizanteRel): void
    {
        $this->ssTipoCotizanteRel = $ssTipoCotizanteRel;
    }

    /**
     * @return mixed
     */
    public function getSsSubtipoCotizanteRel()
    {
        return $this->ssSubtipoCotizanteRel;
    }

    /**
     * @param mixed $ssSubtipoCotizanteRel
     */
    public function setSsSubtipoCotizanteRel($ssSubtipoCotizanteRel): void
    {
        $this->ssSubtipoCotizanteRel = $ssSubtipoCotizanteRel;
    }

    /**
     * @return mixed
     */
    public function getSsTipoPensionRel()
    {
        return $this->ssTipoPensionRel;
    }

    /**
     * @param mixed $ssTipoPensionRel
     */
    public function setSsTipoPensionRel($ssTipoPensionRel): void
    {
        $this->ssTipoPensionRel = $ssTipoPensionRel;
    }

    /**
     * @return mixed
     */
    public function getSsTipoSaludRel()
    {
        return $this->ssTipoSaludRel;
    }

    /**
     * @param mixed $ssTipoSaludRel
     */
    public function setSsTipoSaludRel($ssTipoSaludRel): void
    {
        $this->ssTipoSaludRel = $ssTipoSaludRel;
    }

    /**
     * @return mixed
     */
    public function getSsClasificacionRiesgoRel()
    {
        return $this->ssClasificacionRiesgoRel;
    }

    /**
     * @param mixed $ssClasificacionRiesgoRel
     */
    public function setSsClasificacionRiesgoRel($ssClasificacionRiesgoRel): void
    {
        $this->ssClasificacionRiesgoRel = $ssClasificacionRiesgoRel;
    }

    /**
     * @return mixed
     */
    public function getEntidadPensionRel()
    {
        return $this->entidadPensionRel;
    }

    /**
     * @param mixed $entidadPensionRel
     */
    public function setEntidadPensionRel($entidadPensionRel): void
    {
        $this->entidadPensionRel = $entidadPensionRel;
    }

    /**
     * @return mixed
     */
    public function getEntidadSaludRel()
    {
        return $this->entidadSaludRel;
    }

    /**
     * @param mixed $entidadSaludRel
     */
    public function setEntidadSaludRel($entidadSaludRel): void
    {
        $this->entidadSaludRel = $entidadSaludRel;
    }

    /**
     * @return mixed
     */
    public function getEntidadCesantiasRel()
    {
        return $this->entidadCesantiasRel;
    }

    /**
     * @param mixed $entidadCesantiasRel
     */
    public function setEntidadCesantiasRel($entidadCesantiasRel): void
    {
        $this->entidadCesantiasRel = $entidadCesantiasRel;
    }

    /**
     * @return mixed
     */
    public function getEntidadCajaRel()
    {
        return $this->entidadCajaRel;
    }

    /**
     * @param mixed $entidadCajaRel
     */
    public function setEntidadCajaRel($entidadCajaRel): void
    {
        $this->entidadCajaRel = $entidadCajaRel;
    }

    /**
     * @return mixed
     */
    public function getCiudadContratoRel()
    {
        return $this->ciudadContratoRel;
    }

    /**
     * @param mixed $ciudadContratoRel
     */
    public function setCiudadContratoRel($ciudadContratoRel): void
    {
        $this->ciudadContratoRel = $ciudadContratoRel;
    }

    /**
     * @return mixed
     */
    public function getCiudadLaboraRel()
    {
        return $this->ciudadLaboraRel;
    }

    /**
     * @param mixed $ciudadLaboraRel
     */
    public function setCiudadLaboraRel($ciudadLaboraRel): void
    {
        $this->ciudadLaboraRel = $ciudadLaboraRel;
    }

    /**
     * @return mixed
     */
    public function getMotivoTerminacionRel()
    {
        return $this->motivoTerminacionRel;
    }

    /**
     * @param mixed $motivoTerminacionRel
     */
    public function setMotivoTerminacionRel($motivoTerminacionRel): void
    {
        $this->motivoTerminacionRel = $motivoTerminacionRel;
    }




}

