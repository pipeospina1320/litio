<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SSsubTipoContizanteRepository")
 */
class SSsubTipoContizante
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_subtipo_cotizante_pk", type="integer")
     */
    private $codigoSubtipoCotizantePk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="ssSubtipoCotizanteRel")
     */
    protected $contratoSSsubtipoCotizanteRel;

    /**
     * @return mixed
     */
    public function getCodigoSubtipoCotizantePk()
    {
        return $this->codigoSubtipoCotizantePk;
    }

    /**
     * @param mixed $codigoSubtipoCotizantePk
     */
    public function setCodigoSubtipoCotizantePk($codigoSubtipoCotizantePk): void
    {
        $this->codigoSubtipoCotizantePk = $codigoSubtipoCotizantePk;
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
    public function getContratoSSsubtipoCotizanteRel()
    {
        return $this->contratoSSsubtipoCotizanteRel;
    }

    /**
     * @param mixed $contratoSSsubtipoCotizanteRel
     */
    public function setContratoSSsubtipoCotizanteRel($contratoSSsubtipoCotizanteRel): void
    {
        $this->contratoSSsubtipoCotizanteRel = $contratoSSsubtipoCotizanteRel;
    }


}
