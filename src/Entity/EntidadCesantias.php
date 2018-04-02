<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntidadCesantiasRepository")
 */
class EntidadCesantias
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_entidad_cesantias_pk",type="integer")
     */
    private $codigoEntidadCesantiasPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="entidadCesantiasRel")
     */
    protected $contratoEntidadCesantiasRel;

    /**
     * @return mixed
     */
    public function getCodigoEntidadCesantiasPk()
    {
        return $this->codigoEntidadCesantiasPk;
    }

    /**
     * @param mixed $codigoEntidadCesantiasPk
     */
    public function setCodigoEntidadCesantiasPk($codigoEntidadCesantiasPk): void
    {
        $this->codigoEntidadCesantiasPk = $codigoEntidadCesantiasPk;
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
    public function getContratoEntidadCesantiasRel()
    {
        return $this->contratoEntidadCesantiasRel;
    }

    /**
     * @param mixed $contratoEntidadCesantiasRel
     */
    public function setContratoEntidadCesantiasRel($contratoEntidadCesantiasRel): void
    {
        $this->contratoEntidadCesantiasRel = $contratoEntidadCesantiasRel;
    }


}
