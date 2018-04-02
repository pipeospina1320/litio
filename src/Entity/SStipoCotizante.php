<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SStipoCotizanteRepository")
 */
class SStipoCotizante
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_tipo_cotizante_pk", type="integer")
     */
    private $codigoTipoCotizantePk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="ssTipoCotizanteRel")
     */
    protected $contratoSStipoCotizanteRel;

    /**
     * @return mixed
     */
    public function getCodigoTipoCotizantePk()
    {
        return $this->codigoTipoCotizantePk;
    }

    /**
     * @param mixed $codigoTipoCotizantePk
     */
    public function setCodigoTipoCotizantePk($codigoTipoCotizantePk): void
    {
        $this->codigoTipoCotizantePk = $codigoTipoCotizantePk;
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
    public function getContratoSStipoCotizanteRel()
    {
        return $this->contratoSStipoCotizanteRel;
    }

    /**
     * @param mixed $contratoSStipoCotizanteRel
     */
    public function setContratoSStipoCotizanteRel($contratoSStipoCotizanteRel): void
    {
        $this->contratoSStipoCotizanteRel = $contratoSStipoCotizanteRel;
    }


}
