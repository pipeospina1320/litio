<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuIdentidadSexoRepository")
 */
class RhuIdentidadSexo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_identidad_sexo_pk", type="integer")
     */
    private $codigoIdentidadSexoPk;

    /**
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuEmpleado", mappedBy="identidadSexoRel")
     *
     */
    private $empleadoIdentidadSexoRel;

    /**
     * @return mixed
     */
    public function getCodigoIdentidadSexoPk()
    {
        return $this->codigoIdentidadSexoPk;
    }

    /**
     * @param mixed $codigoIdentidadSexoPk
     */
    public function setCodigoIdentidadSexoPk($codigoIdentidadSexoPk): void
    {
        $this->codigoIdentidadSexoPk = $codigoIdentidadSexoPk;
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
    public function getEmpleadoIdentidadSexoRel()
    {
        return $this->empleadoIdentidadSexoRel;
    }

    /**
     * @param mixed $empleadoIdentidadSexoRel
     */
    public function setEmpleadoIdentidadSexoRel($empleadoIdentidadSexoRel): void
    {
        $this->empleadoIdentidadSexoRel = $empleadoIdentidadSexoRel;
    }


}
