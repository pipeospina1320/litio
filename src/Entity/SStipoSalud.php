<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SStipoSaludRepository")
 */
class SStipoSalud
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_tipo_salud_pk", type="integer")
     */
    private $codigoTipoSaludPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="ssTipoSaludRel")
     */
    protected $contratoSStipoSaludRel;

    /**
     * @return mixed
     */
    public function getCodigoTipoSaludPk()
    {
        return $this->codigoTipoSaludPk;
    }

    /**
     * @param mixed $codigoTipoSaludPk
     */
    public function setCodigoTipoSaludPk($codigoTipoSaludPk): void
    {
        $this->codigoTipoSaludPk = $codigoTipoSaludPk;
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
    public function getContratoSStipoSaludRel()
    {
        return $this->contratoSStipoSaludRel;
    }

    /**
     * @param mixed $contratoSStipoSaludRel
     */
    public function setContratoSStipoSaludRel($contratoSStipoSaludRel): void
    {
        $this->contratoSStipoSaludRel = $contratoSStipoSaludRel;
    }



}
