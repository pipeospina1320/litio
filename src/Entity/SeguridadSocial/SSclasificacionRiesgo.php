<?php

namespace App\Entity\SeguridadSocial;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeguridadSocial\SSclasificacionRiesgoRepository")
 */
class SSclasificacionRiesgo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_clasificacion_riesgo_pk", type="integer")
     */
    private $codigoClasificacionRiesgoPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato", mappedBy="ssClasificacionRiesgoRel")
     */
    protected $contratoSSclasificacionRiesgoRel;

    /**
     * @return mixed
     */
    public function getCodigoClasificacionRiesgoPk()
    {
        return $this->codigoClasificacionRiesgoPk;
    }

    /**
     * @param mixed $codigoClasificacionRiesgoPk
     */
    public function setCodigoClasificacionRiesgoPk($codigoClasificacionRiesgoPk): void
    {
        $this->codigoClasificacionRiesgoPk = $codigoClasificacionRiesgoPk;
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
    public function getContratoSSclasificacionRiesgoRel()
    {
        return $this->contratoSSclasificacionRiesgoRel;
    }

    /**
     * @param mixed $contratoSSclasificacionRiesgoRel
     */
    public function setContratoSSclasificacionRiesgoRel($contratoSSclasificacionRiesgoRel): void
    {
        $this->contratoSSclasificacionRiesgoRel = $contratoSSclasificacionRiesgoRel;
    }


}
