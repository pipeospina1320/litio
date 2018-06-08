<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuLibretaTipoRepository")
 */
class RhuLibretaTipo
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="codigo_libreta_tipo_pk" , type="integer")
     */
    private $codigoLibretaTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuEmpleado" , mappedBy="libretaTipoRel")
     */
    private $empleadoLibretaTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoLibretaTipoPk()
    {
        return $this->codigoLibretaTipoPk;
    }

    /**
     * @param mixed $codigoLibretaTipoPk
     */
    public function setCodigoLibretaTipoPk($codigoLibretaTipoPk): void
    {
        $this->codigoLibretaTipoPk = $codigoLibretaTipoPk;
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
    public function getEmpleadoLibretaTipoRel()
    {
        return $this->empleadoLibretaTipoRel;
    }

    /**
     * @param mixed $empleadoLibretaTipoRel
     */
    public function setEmpleadoLibretaTipoRel($empleadoLibretaTipoRel): void
    {
        $this->empleadoLibretaTipoRel = $empleadoLibretaTipoRel;
    }

}
