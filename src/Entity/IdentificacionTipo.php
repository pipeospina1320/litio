<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IdentificacionTipoRepository")
 */
class IdentificacionTipo
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $codigoIdentificacionTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Empleado" , mappedBy="identificacionTipoRel")
     */
    private $empleadoRel;

    /**
     * @return mixed
     */
    public function getCodigoIdentificacionTipoPk()
    {
        return $this->codigoIdentificacionTipoPk;
    }

    /**
     * @param mixed $codigoIdentificacionTipoPk
     */
    public function setCodigoIdentificacionTipoPk($codigoIdentificacionTipoPk): void
    {
        $this->codigoIdentificacionTipoPk = $codigoIdentificacionTipoPk;
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
    

}
