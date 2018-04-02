<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntidadCajaRepository")
 */
class EntidadCaja
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_entidad_caja_pk",type="integer")
     */
    private $codigoEntidadCajaPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="entidadCajaRel")
     */
    protected $contratoEntidadCajaRel;

    /**
     * @return mixed
     */
    public function getCodigoEntidadCajaPk()
    {
        return $this->codigoEntidadCajaPk;
    }

    /**
     * @param mixed $codigoEntidadCajaPk
     */
    public function setCodigoEntidadCajaPk($codigoEntidadCajaPk): void
    {
        $this->codigoEntidadCajaPk = $codigoEntidadCajaPk;
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
    public function getContratoEntidadCajaRel()
    {
        return $this->contratoEntidadCajaRel;
    }

    /**
     * @param mixed $contratoEntidadCajaRel
     */
    public function setContratoEntidadCajaRel($contratoEntidadCajaRel): void
    {
        $this->contratoEntidadCajaRel = $contratoEntidadCajaRel;
    }


}
