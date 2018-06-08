<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuPagoTipoRepository")
 */
class RhuPagoTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_pago_tipo_pk", type="integer")
     */
    private $codigoPagoTipoPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuPago" , mappedBy="pagoTipoRel")
     */
    protected $pagosPagoTipoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuProgramacionPago", mappedBy="pagoTipoRel")
     */
    protected $programacionesPagosPagoTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoPagoTipoPk()
    {
        return $this->codigoPagoTipoPk;
    }

    /**
     * @param mixed $codigoPagoTipoPk
     */
    public function setCodigoPagoTipoPk($codigoPagoTipoPk): void
    {
        $this->codigoPagoTipoPk = $codigoPagoTipoPk;
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
    public function getPagosPagoTipoRel()
    {
        return $this->pagosPagoTipoRel;
    }

    /**
     * @param mixed $pagosPagoTipoRel
     */
    public function setPagosPagoTipoRel($pagosPagoTipoRel): void
    {
        $this->pagosPagoTipoRel = $pagosPagoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getProgramacionesPagosPagoTipoRel()
    {
        return $this->programacionesPagosPagoTipoRel;
    }

    /**
     * @param mixed $programacionesPagosPagoTipoRel
     */
    public function setProgramacionesPagosPagoTipoRel($programacionesPagosPagoTipoRel): void
    {
        $this->programacionesPagosPagoTipoRel = $programacionesPagosPagoTipoRel;
    }




}
