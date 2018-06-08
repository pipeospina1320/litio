<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuEmpleadoTipoRepository")
 */
class RhuEmpleadoTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_empleado_tipo_pk" , type="integer")
     */
    private $codigoEmpleadoTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuEmpleado" , mappedBy="empleadoTipoRel")
     */
    private $empleadoEmpleadoTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoEmpleadoTipoPk()
    {
        return $this->codigoEmpleadoTipoPk;
    }

    /**
     * @param mixed $codigoEmpleadoTipoPk
     */
    public function setCodigoEmpleadoTipoPk($codigoEmpleadoTipoPk): void
    {
        $this->codigoEmpleadoTipoPk = $codigoEmpleadoTipoPk;
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
    public function getEmpleadoEmpleadoTipoRel()
    {
        return $this->empleadoEmpleadoTipoRel;
    }

    /**
     * @param mixed $empleadoEmpleadoTipoRel
     */
    public function setEmpleadoEmpleadoTipoRel($empleadoEmpleadoTipoRel): void
    {
        $this->empleadoEmpleadoTipoRel = $empleadoEmpleadoTipoRel;
    }

}
