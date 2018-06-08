<?php

namespace App\Entity\SeguridadSocial;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SeguridadSocial\SSentidadSaludRepository")
 */
class SSentidadSalud
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_entidad_salud_pk" ,type="integer")
     */
    private $codigoEntidadSaludPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato", mappedBy="entidadSaludRel")
     */
    protected $contratoEntidadSaludRel;

    /**
     * @return mixed
     */
    public function getCodigoEntidadSaludPk()
    {
        return $this->codigoEntidadSaludPk;
    }

    /**
     * @param mixed $codigoEntidadSaludPk
     */
    public function setCodigoEntidadSaludPk($codigoEntidadSaludPk): void
    {
        $this->codigoEntidadSaludPk = $codigoEntidadSaludPk;
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
    public function getContratoEntidadSaludRel()
    {
        return $this->contratoEntidadSaludRel;
    }

    /**
     * @param mixed $contratoEntidadSaludRel
     */
    public function setContratoEntidadSaludRel($contratoEntidadSaludRel): void
    {
        $this->contratoEntidadSaludRel = $contratoEntidadSaludRel;
    }


}
