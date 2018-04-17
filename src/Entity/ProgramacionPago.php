<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProgramacionPagoRepository")
 */
class ProgramacionPago
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_programacion_pago_pk", type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $codigoProgramacionPagoPk;

    /**
     * @ORM\Column(name="nombre", type="string",length=80, nullable=true)
     * @Assert\Length(
     *      max = 80,
     *      maxMessage = "La cantidad máxima de caracteres para el nombre es de 80"
     * )
     */
    private $nombre;

    /**
     * @ORM\Column(name="numero", type="integer", nullable=true)

     */
    private $numero;

    /**
     * @ORM\Column(name="codigo_pago_tipo_fk", type="integer", nullable=false)
     */
    private $codigoPagoTipoFk;

    /**
     * @ORM\Column(name="fecha_desde", type="date", nullable=true)
     */
    private $fechaDesde;

    /**
     * @ORM\Column(name="fecha_hasta", type="date", nullable=true)
     */
    private $fechaHasta;

    /**
     * @ORM\Column(name="fecha_hasta_real", type="date", nullable=true)
     */
    private $fechaHastaReal;

    /**
     * @ORM\Column(name="fecha_pagado", type="datetime", nullable=true)
     */
    private $fechaPagado;

    /**
     * @ORM\Column(name="dias", type="integer")
     */
    private $dias = 0;

    /**
     * @ORM\Column(name="codigo_grupo_pago_fk", type="integer", nullable=true)
     */
    private $codigoGrupoPagoFk;

    /**
     * @ORM\Column(name="estado_generado", type="boolean")
     */
    private $estadoGenerado = false;

    /**
     * @ORM\Column(name="estado_pagado", type="boolean")
     */
    private $estadoPagado = false;

//    /**
//     * @ORM\Column(name="estado_pagado_banco", type="boolean")
//     */
//    private $estadoPagadoBanco = false;

    /**
     * @ORM\Column(name="estado_anulado", type="boolean")
     */
    private $estadoAnulado = false;

    /**
     * @ORM\Column(name="contratos_terminados", type="boolean",nullable=true)
     */
    private $contratosTerminados = false;

    /**
     * @ORM\Column(name="vr_neto", type="float")
     */
    private $vr_neto = 0;

    /**
     * @ORM\Column(name="numero_empleados", type="integer")
     */
    private $numeroEmpleados = 0;

    /**
     * @ORM\Column(name="inconsistencias", type="boolean")
     */
    private $inconsistencias = 0;

    /**
     * @ORM\Column(name="codigo_usuario", type="string", length=50, nullable=true)
     */
    private $codigoUsuario;

    /**
     * @ORM\Column(name="mensaje_pago", type="string", length=400, nullable=true)
     */
    private $mensaje_pago;

    /**
     * @ORM\Column(name="aplicar_vacacacion", type="boolean", nullable=true)
     */
    private $aplicarVacacion = true;

    /**
     * @ORM\Column(name="aplicar_incapacidad", type="boolean", nullable=true)
     */
    private $aplicarIncapacidad = true;

    /**
     * @ORM\Column(name="aplicar_licencia", type="boolean", nullable=true)
     */
    private $aplicarLicencia = true;

    /**
     * @ORM\Column(name="aplicar_adicional", type="boolean", nullable=true)
     */
    private $aplicarAdicional = true;

    /**
     * @ORM\Column(name="aplicar_extra", type="boolean", nullable=true)
     */
    private $aplicarExtra = true;

    /**
     * @ORM\Column(name="aplicar_salud", type="boolean", nullable=true)
     */
    private $aplicarSalud = true;

    /**
     * @ORM\Column(name="aplicar_pension", type="boolean", nullable=true)
     */
    private $aplicarPension = true;

    /**
     * @ORM\Column(name="aplicar_transporte", type="boolean", nullable=true)
     */
    private $aplicarTransporte = true;

    /**
     * @ORM\Column(name="aplicar_salario", type="boolean", nullable=true)
     */
    private $aplicarSalario = true;

    /**
     * @ORM\Column(name="aplicar_adicionales_pago_permanentes", type="boolean" , nullable=true)
     */
    private $aplicarAdicionalesPagoPermanentes = true;

    /**
     * @ORM\Column(name="aplicar_creditos", type="boolean", nullable=true)
     */
    private $aplicarCreditos = true;

    /**
     * @ORM\Column(name="aplicar_embargos", type="boolean", nullable=true)
     */
    private $aplicarEmbargos = true;

    /**
     * @ORM\Column(name="aplicar_anticipo", type="boolean", nullable=true)
     */
    private $aplicarAnticipo = true;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PagoTipo", inversedBy="programacionesPagosPagoTipoRel")
     * @ORM\JoinColumn(name="codigo_pago_tipo_fk", referencedColumnName="codigo_pago_tipo_pk")
     */
    protected $pagoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\GrupoPago", inversedBy="programacionesPagosGrupoPagoRel")
     * @ORM\JoinColumn(name="codigo_grupo_pago_fk", referencedColumnName="codigo_grupo_pago_pk")
     */
    protected $grupoPagoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProgramacionPagoResumen", mappedBy="programacionPagoRel")
     */
    protected $programacionesPagosDetallesRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pago", mappedBy="programacionPagoRel")
     */
    protected $pagosProgramacionPagoRel;

    /**
     * @return mixed
     */
    public function getCodigoProgramacionPagoPk()
    {
        return $this->codigoProgramacionPagoPk;
    }

    /**
     * @param mixed $codigoProgramacionPagoPk
     */
    public function setCodigoProgramacionPagoPk($codigoProgramacionPagoPk): void
    {
        $this->codigoProgramacionPagoPk = $codigoProgramacionPagoPk;
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
    public function getFechaHastaReal()
    {
        return $this->fechaHastaReal;
    }

    /**
     * @param mixed $fechaHastaReal
     */
    public function setFechaHastaReal($fechaHastaReal): void
    {
        $this->fechaHastaReal = $fechaHastaReal;
    }

    /**
     * @return mixed
     */
    public function getFechaPagado()
    {
        return $this->fechaPagado;
    }

    /**
     * @param mixed $fechaPagado
     */
    public function setFechaPagado($fechaPagado): void
    {
        $this->fechaPagado = $fechaPagado;
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
    public function getEstadoGenerado()
    {
        return $this->estadoGenerado;
    }

    /**
     * @param mixed $estadoGenerado
     */
    public function setEstadoGenerado($estadoGenerado): void
    {
        $this->estadoGenerado = $estadoGenerado;
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
    public function getContratosTerminados()
    {
        return $this->contratosTerminados;
    }

    /**
     * @param mixed $contratosTerminados
     */
    public function setContratosTerminados($contratosTerminados): void
    {
        $this->contratosTerminados = $contratosTerminados;
    }

    /**
     * @return mixed
     */
    public function getVrNeto()
    {
        return $this->vr_neto;
    }

    /**
     * @param mixed $vr_neto
     */
    public function setVrNeto($vr_neto): void
    {
        $this->vr_neto = $vr_neto;
    }

    /**
     * @return mixed
     */
    public function getNumeroEmpleados()
    {
        return $this->numeroEmpleados;
    }

    /**
     * @param mixed $numeroEmpleados
     */
    public function setNumeroEmpleados($numeroEmpleados): void
    {
        $this->numeroEmpleados = $numeroEmpleados;
    }

    /**
     * @return mixed
     */
    public function getInconsistencias()
    {
        return $this->inconsistencias;
    }

    /**
     * @param mixed $inconsistencias
     */
    public function setInconsistencias($inconsistencias): void
    {
        $this->inconsistencias = $inconsistencias;
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
    public function getMensajePago()
    {
        return $this->mensaje_pago;
    }

    /**
     * @param mixed $mensaje_pago
     */
    public function setMensajePago($mensaje_pago): void
    {
        $this->mensaje_pago = $mensaje_pago;
    }

    /**
     * @return mixed
     */
    public function getAplicarVacacion()
    {
        return $this->aplicarVacacion;
    }

    /**
     * @param mixed $aplicarVacacion
     */
    public function setAplicarVacacion($aplicarVacacion): void
    {
        $this->aplicarVacacion = $aplicarVacacion;
    }

    /**
     * @return mixed
     */
    public function getAplicarIncapacidad()
    {
        return $this->aplicarIncapacidad;
    }

    /**
     * @param mixed $aplicarIncapacidad
     */
    public function setAplicarIncapacidad($aplicarIncapacidad): void
    {
        $this->aplicarIncapacidad = $aplicarIncapacidad;
    }

    /**
     * @return mixed
     */
    public function getAplicarLicencia()
    {
        return $this->aplicarLicencia;
    }

    /**
     * @param mixed $aplicarLicencia
     */
    public function setAplicarLicencia($aplicarLicencia): void
    {
        $this->aplicarLicencia = $aplicarLicencia;
    }

    /**
     * @return mixed
     */
    public function getAplicarAdicional()
    {
        return $this->aplicarAdicional;
    }

    /**
     * @param mixed $aplicarAdicional
     */
    public function setAplicarAdicional($aplicarAdicional): void
    {
        $this->aplicarAdicional = $aplicarAdicional;
    }

    /**
     * @return mixed
     */
    public function getAplicarExtra()
    {
        return $this->aplicarExtra;
    }

    /**
     * @param mixed $aplicarExtra
     */
    public function setAplicarExtra($aplicarExtra): void
    {
        $this->aplicarExtra = $aplicarExtra;
    }

    /**
     * @return mixed
     */
    public function getAplicarSalud()
    {
        return $this->aplicarSalud;
    }

    /**
     * @param mixed $aplicarSalud
     */
    public function setAplicarSalud($aplicarSalud): void
    {
        $this->aplicarSalud = $aplicarSalud;
    }

    /**
     * @return mixed
     */
    public function getAplicarPension()
    {
        return $this->aplicarPension;
    }

    /**
     * @param mixed $aplicarPension
     */
    public function setAplicarPension($aplicarPension): void
    {
        $this->aplicarPension = $aplicarPension;
    }

    /**
     * @return mixed
     */
    public function getAplicarTransporte()
    {
        return $this->aplicarTransporte;
    }

    /**
     * @param mixed $aplicarTransporte
     */
    public function setAplicarTransporte($aplicarTransporte): void
    {
        $this->aplicarTransporte = $aplicarTransporte;
    }

    /**
     * @return mixed
     */
    public function getAplicarSalario()
    {
        return $this->aplicarSalario;
    }

    /**
     * @param mixed $aplicarSalario
     */
    public function setAplicarSalario($aplicarSalario): void
    {
        $this->aplicarSalario = $aplicarSalario;
    }

    /**
     * @return mixed
     */
    public function getAplicarAdicionalesPagoPermanentes()
    {
        return $this->aplicarAdicionalesPagoPermanentes;
    }

    /**
     * @param mixed $aplicarAdicionalesPagoPermanentes
     */
    public function setAplicarAdicionalesPagoPermanentes($aplicarAdicionalesPagoPermanentes): void
    {
        $this->aplicarAdicionalesPagoPermanentes = $aplicarAdicionalesPagoPermanentes;
    }

    /**
     * @return mixed
     */
    public function getAplicarCreditos()
    {
        return $this->aplicarCreditos;
    }

    /**
     * @param mixed $aplicarCreditos
     */
    public function setAplicarCreditos($aplicarCreditos): void
    {
        $this->aplicarCreditos = $aplicarCreditos;
    }

    /**
     * @return mixed
     */
    public function getAplicarEmbargos()
    {
        return $this->aplicarEmbargos;
    }

    /**
     * @param mixed $aplicarEmbargos
     */
    public function setAplicarEmbargos($aplicarEmbargos): void
    {
        $this->aplicarEmbargos = $aplicarEmbargos;
    }

    /**
     * @return mixed
     */
    public function getAplicarAnticipo()
    {
        return $this->aplicarAnticipo;
    }

    /**
     * @param mixed $aplicarAnticipo
     */
    public function setAplicarAnticipo($aplicarAnticipo): void
    {
        $this->aplicarAnticipo = $aplicarAnticipo;
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
    public function getProgramacionesPagosDetallesRel()
    {
        return $this->programacionesPagosDetallesRel;
    }

    /**
     * @param mixed $programacionesPagosDetallesRel
     */
    public function setProgramacionesPagosDetallesRel($programacionesPagosDetallesRel): void
    {
        $this->programacionesPagosDetallesRel = $programacionesPagosDetallesRel;
    }

    /**
     * @return mixed
     */
    public function getPagosProgramacionPagoRel()
    {
        return $this->pagosProgramacionPagoRel;
    }

    /**
     * @param mixed $pagosProgramacionPagoRel
     */
    public function setPagosProgramacionPagoRel($pagosProgramacionPagoRel): void
    {
        $this->pagosProgramacionPagoRel = $pagosProgramacionPagoRel;
    }



}
