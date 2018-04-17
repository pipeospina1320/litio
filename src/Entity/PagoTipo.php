<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PagoTipoRepository")
 */
class PagoTipo
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
     * @ORM\Column(name="codigo_cuenta_fk", type="string", length=20, nullable=true)
     */
    private $codigoCuentaFk;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Pago" , mappedBy="pagoTipoRel")
     */
    protected $pagosPagoTipoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProgramacionPago", mappedBy="pagoTipoRel")
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
    public function getCodigoCuentaFk()
    {
        return $this->codigoCuentaFk;
    }

    /**
     * @param mixed $codigoCuentaFk
     */
    public function setCodigoCuentaFk($codigoCuentaFk): void
    {
        $this->codigoCuentaFk = $codigoCuentaFk;
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
