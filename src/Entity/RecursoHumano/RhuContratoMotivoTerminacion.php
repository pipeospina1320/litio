<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuContratoMotivoTerminacionRepository")
 */
class RhuContratoMotivoTerminacion
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_contrato_motivo_terminacion_pk" , type="integer")
     */
    private $codigoContratoMotivoTerminacionPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato", mappedBy="motivoTerminacionRel")
     */
    protected $contratoMotivoTerminacionRel;

    /**
     * @return mixed
     */
    public function getCodigoContratoMotivoTerminacionPk()
    {
        return $this->codigoContratoMotivoTerminacionPk;
    }

    /**
     * @param mixed $codigoContratoMotivoTerminacionPk
     */
    public function setCodigoContratoMotivoTerminacionPk($codigoContratoMotivoTerminacionPk): void
    {
        $this->codigoContratoMotivoTerminacionPk = $codigoContratoMotivoTerminacionPk;
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
    public function getContratoMotivoTerminacionRel()
    {
        return $this->contratoMotivoTerminacionRel;
    }

    /**
     * @param mixed $contratoMotivoTerminacionRel
     */
    public function setContratoMotivoTerminacionRel($contratoMotivoTerminacionRel): void
    {
        $this->contratoMotivoTerminacionRel = $contratoMotivoTerminacionRel;
    }


}
