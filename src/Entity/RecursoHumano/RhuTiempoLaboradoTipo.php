<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuTiempoLaboradoTipoRepository")
 */
class RhuTiempoLaboradoTipo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_tiempo_laborado_pk",type="integer")
     */
    private $codigoTiempoLaboradoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato" , mappedBy="tiempoLaboradoTipoRel")
     */
    private $contratoTiempoLaboradoTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoTiempoLaboradoPk()
    {
        return $this->codigoTiempoLaboradoPk;
    }

    /**
     * @param mixed $codigoTiempoLaboradoPk
     */
    public function setCodigoTiempoLaboradoPk($codigoTiempoLaboradoPk): void
    {
        $this->codigoTiempoLaboradoPk = $codigoTiempoLaboradoPk;
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
    public function getContratoTiempoLaboradoTipoRel()
    {
        return $this->contratoTiempoLaboradoTipoRel;
    }

    /**
     * @param mixed $contratoTiempoLaboradoTipoRel
     */
    public function setContratoTiempoLaboradoTipoRel($contratoTiempoLaboradoTipoRel): void
    {
        $this->contratoTiempoLaboradoTipoRel = $contratoTiempoLaboradoTipoRel;
    }


}

