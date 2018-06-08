<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuPeriodoPagoTipoRepository")
 */
class RhuPeriodoPagoTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_periodo_pago_pk", type="integer")
     */
    private $codigoPeriodoPagoPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=80, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="dias", type="integer")
     */
    private $dias = 0;

    /**
     * @ORM\Column(name="limite_horas_extra", type="integer")
     */
    private $limiteHorasExtra = 0;

    /**
     * Esta propiedad define si tiene cortes en el mes o no 10 15 30
     * @ORM\Column(name="continuo", type="boolean")
     */
    private $continuo = 0;

    /**
     * Especifica de cuantos periodos consta el mes, aplica solo para no continuos
     * @ORM\Column(name="periodos_mes", type="float")
     */
    private $periodosMes = 0;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuGrupoPago", mappedBy="periodoPagoRel")
     */
    protected $grupoPagoPeriodoPagoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuPago", mappedBy="periodoPagoRel")
     */
    protected $pagosPeriodoPagoRel;

    /**
     * @return mixed
     */
    public function getCodigoPeriodoPagoPk()
    {
        return $this->codigoPeriodoPagoPk;
    }

    /**
     * @param mixed $codigoPeriodoPagoPk
     */
    public function setCodigoPeriodoPagoPk($codigoPeriodoPagoPk): void
    {
        $this->codigoPeriodoPagoPk = $codigoPeriodoPagoPk;
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
    public function getLimiteHorasExtra()
    {
        return $this->limiteHorasExtra;
    }

    /**
     * @param mixed $limiteHorasExtra
     */
    public function setLimiteHorasExtra($limiteHorasExtra): void
    {
        $this->limiteHorasExtra = $limiteHorasExtra;
    }

    /**
     * @return mixed
     */
    public function getContinuo()
    {
        return $this->continuo;
    }

    /**
     * @param mixed $continuo
     */
    public function setContinuo($continuo): void
    {
        $this->continuo = $continuo;
    }

    /**
     * @return mixed
     */
    public function getPeriodosMes()
    {
        return $this->periodosMes;
    }

    /**
     * @param mixed $periodosMes
     */
    public function setPeriodosMes($periodosMes): void
    {
        $this->periodosMes = $periodosMes;
    }

    /**
     * @return mixed
     */
    public function getCentrosCostosPeriodoPagoRel()
    {
        return $this->centrosCostosPeriodoPagoRel;
    }

    /**
     * @param mixed $centrosCostosPeriodoPagoRel
     */
    public function setCentrosCostosPeriodoPagoRel($centrosCostosPeriodoPagoRel): void
    {
        $this->centrosCostosPeriodoPagoRel = $centrosCostosPeriodoPagoRel;
    }

    /**
     * @return mixed
     */
    public function getPagosPeriodoPagoRel()
    {
        return $this->pagosPeriodoPagoRel;
    }

    /**
     * @param mixed $pagosPeriodoPagoRel
     */
    public function setPagosPeriodoPagoRel($pagosPeriodoPagoRel): void
    {
        $this->pagosPeriodoPagoRel = $pagosPeriodoPagoRel;
    }



}
