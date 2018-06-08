<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuContratoTipoRepository")
 */
class RhuContratoTipo
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="codigo_contrato_tipo_pk" , type="integer")
     */
    private $codigoContratoTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\RecursoHumano\RhuContrato" , mappedBy="contratoTipoRel")
     */
    protected $contratoContratoTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoContratoTipoPk()
    {
        return $this->codigoContratoTipoPk;
    }

    /**
     * @param mixed $codigoContratoTipoPk
     */
    public function setCodigoContratoTipoPk($codigoContratoTipoPk): void
    {
        $this->codigoContratoTipoPk = $codigoContratoTipoPk;
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
    public function getContratoContratoTipoRel()
    {
        return $this->contratoContratoTipoRel;
    }

    /**
     * @param mixed $contratoContratoTipoRel
     */
    public function setContratoContratoTipoRel($contratoContratoTipoRel): void
    {
        $this->contratoContratoTipoRel = $contratoContratoTipoRel;
    }



}
