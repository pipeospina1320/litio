<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuGrupoPagoRepository")
 */
class RhuGrupoPago
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_grupo_pago_pk" , type="integer")
     */
    private $codigoGrupoPagoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(name="codigo_ciudad_fk", type="integer", nullable=true)
     */
    private $codigoCiudadFk;

    /**
     * @ORM\Column(name="codigo_periodo_pago_fk", type="integer", nullable=true)
     */
    private $codigoPeriodoPagoFk;

    /**
     * @ORM\Column(name="fecha_ultimo_pago", type="date", nullable=true)
     */
    private $fechaUltimoPago;

    /**
     * @ORM\Column(name="estado_activo", type="boolean")
     */
    private $estadoActivo = false;

    /**
     * @ORM\Column(name="comentarios", type="string", length=500, nullable=true)
     */
    private $comentarios;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_prima", type="date", nullable=true)
     */
    private $fechaUltimoPagoPrima;

    /**
     * @ORM\Column(name="fecha_ultimo_pago_cesantias", type="date", nullable=true)
     */
    private $fechaUltimoPagoCesantias;

    /**
     * @ORM\Column(name="administrativo", type="boolean")
     */
    private $administrativo = false;

    /**
     * @ORM\Column(name="codigo_usuario", type="string", length=50, nullable=true)
     */
    private $codigoUsuario;

    /**
     * @ORM\Column(name="pagar_dia_31", type="boolean")
     */
    private $pagarDia31 = false;

    /**
     * @ORM\Column(name="horas_recargos_agrupadas", type="boolean")
     */
    private $horasRecargoAgrupadas = true;

    /**
     * @ORM\Column(name="limite_devengado_grupo_pago", type="float", nullable=true, options={"default":0})
     */
    private $limiteDevengadoGrupoPago = 0;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato" , mappedBy="grupoPagoRel")
     */
    protected $contratoGrupoPagoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuProgramacionPago", mappedBy="grupoPagoRel")
     */
    protected $programacionesPagosGrupoPagoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuPago", mappedBy="grupoPagoRel")
     */
    protected $pagosGrupoPagoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RecursoHumano\RhuPeriodoPagoTipo" ,inversedBy="grupoPagoPeriodoPagoRel")
     * @ORM\JoinColumn(name="codigo_periodo_pago_fk" , referencedColumnName="codigo_periodo_pago_pk")
     */
    protected $periodoPagoRel;

    /**
     * @return mixed
     */
    public function getCodigoGrupoPagoPk()
    {
        return $this->codigoGrupoPagoPk;
    }

    /**
     * @param mixed $codigoGrupoPagoPk
     */
    public function setCodigoGrupoPagoPk($codigoGrupoPagoPk): void
    {
        $this->codigoGrupoPagoPk = $codigoGrupoPagoPk;
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
    public function getCodigoCiudadFk()
    {
        return $this->codigoCiudadFk;
    }

    /**
     * @param mixed $codigoCiudadFk
     */
    public function setCodigoCiudadFk($codigoCiudadFk): void
    {
        $this->codigoCiudadFk = $codigoCiudadFk;
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
    public function getAdministrativo()
    {
        return $this->administrativo;
    }

    /**
     * @param mixed $administrativo
     */
    public function setAdministrativo($administrativo): void
    {
        $this->administrativo = $administrativo;
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
    public function getPagarDia31()
    {
        return $this->pagarDia31;
    }

    /**
     * @param mixed $pagarDia31
     */
    public function setPagarDia31($pagarDia31): void
    {
        $this->pagarDia31 = $pagarDia31;
    }

    /**
     * @return mixed
     */
    public function getHorasRecargoAgrupadas()
    {
        return $this->horasRecargoAgrupadas;
    }

    /**
     * @param mixed $horasRecargoAgrupadas
     */
    public function setHorasRecargoAgrupadas($horasRecargoAgrupadas): void
    {
        $this->horasRecargoAgrupadas = $horasRecargoAgrupadas;
    }

    /**
     * @return mixed
     */
    public function getLimiteDevengadoGrupoPago()
    {
        return $this->limiteDevengadoGrupoPago;
    }

    /**
     * @param mixed $limiteDevengadoGrupoPago
     */
    public function setLimiteDevengadoGrupoPago($limiteDevengadoGrupoPago): void
    {
        $this->limiteDevengadoGrupoPago = $limiteDevengadoGrupoPago;
    }

    /**
     * @return mixed
     */
    public function getContratoGrupoPagoRel()
    {
        return $this->contratoGrupoPagoRel;
    }

    /**
     * @param mixed $contratoGrupoPagoRel
     */
    public function setContratoGrupoPagoRel($contratoGrupoPagoRel): void
    {
        $this->contratoGrupoPagoRel = $contratoGrupoPagoRel;
    }

    /**
     * @return mixed
     */
    public function getProgramacionesPagosCentroCostoRel()
    {
        return $this->programacionesPagosCentroCostoRel;
    }

    /**
     * @param mixed $programacionesPagosCentroCostoRel
     */
    public function setProgramacionesPagosCentroCostoRel($programacionesPagosCentroCostoRel): void
    {
        $this->programacionesPagosCentroCostoRel = $programacionesPagosCentroCostoRel;
    }

    /**
     * @return mixed
     */
    public function getPagosGrupoPagoRel()
    {
        return $this->pagosGrupoPagoRel;
    }

    /**
     * @param mixed $pagosGrupoPagoRel
     */
    public function setPagosGrupoPagoRel($pagosGrupoPagoRel): void
    {
        $this->pagosGrupoPagoRel = $pagosGrupoPagoRel;
    }






}
