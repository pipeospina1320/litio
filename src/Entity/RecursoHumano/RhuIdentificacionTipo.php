<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuIdentificacionTipoRepository")
 */
class RhuIdentificacionTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_identificacion_tipo_pk" , type="integer")
     */
    private $codigoIdentificacionTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuEmpleado" , mappedBy="identificacionTipoRel")
     */
    private $empleadoIdentificacionRel;

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

    /**
     * @return mixed
     */
    public function getEmpleadoIdentificacionRel()
    {
        return $this->empleadoIdentificacionRel;
    }

    /**
     * @param mixed $empleadoIdentificacionRel
     */
    public function setEmpleadoIdentificacionRel($empleadoIdentificacionRel): void
    {
        $this->empleadoIdentificacionRel = $empleadoIdentificacionRel;
    }




}
