<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SStipoPensionRepository")
 */
class SStipoPension
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_tipo_pension_pk", type="integer")
     */
    private $codigoTipoPensionPk;

    /**
     * @ORM\Column(name="nombre", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato", mappedBy="ssTipoPensionRel")
     */
    protected $contratoSStipoPensionRel;

    /**
     * @return mixed
     */
    public function getCodigoTipoPensionPk()
    {
        return $this->codigoTipoPensionPk;
    }

    /**
     * @param mixed $codigoTipoPensionPk
     */
    public function setCodigoTipoPensionPk($codigoTipoPensionPk): void
    {
        $this->codigoTipoPensionPk = $codigoTipoPensionPk;
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
    public function getContratoSStipoPensionRel()
    {
        return $this->contratoSStipoPensionRel;
    }

    /**
     * @param mixed $contratoSStipoPensionRel
     */
    public function setContratoSStipoPensionRel($contratoSStipoPensionRel): void
    {
        $this->contratoSStipoPensionRel = $contratoSStipoPensionRel;
    }


}
