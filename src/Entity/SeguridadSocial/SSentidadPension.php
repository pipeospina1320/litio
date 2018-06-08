<?php

namespace App\Entity\SeguridadSocial;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeguridadSocial\SSentidadPensionRepository")
 */
class SSentidadPension
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_entidad_pension_pk", type="integer")
     */
    private $codigoEntidadPensionPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato", mappedBy="entidadPensionRel")
     */
    protected $contratoEntidadPensionRel;

    /**
     * @return mixed
     */
    public function getCodigoEntidadPensionPk()
    {
        return $this->codigoEntidadPensionPk;
    }

    /**
     * @param mixed $codigoEntidadPensionPk
     */
    public function setCodigoEntidadPensionPk($codigoEntidadPensionPk): void
    {
        $this->codigoEntidadPensionPk = $codigoEntidadPensionPk;
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
    public function getContratoEntidadPensionRel()
    {
        return $this->contratoEntidadPensionRel;
    }

    /**
     * @param mixed $contratoEntidadPensionRel
     */
    public function setContratoEntidadPensionRel($contratoEntidadPensionRel): void
    {
        $this->contratoEntidadPensionRel = $contratoEntidadPensionRel;
    }



}
