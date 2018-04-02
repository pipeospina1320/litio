<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SalarioTipoRepository")
 */
class SalarioTipo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_salario_tipo_pk" ,type="integer")
     */
    private $codigoSalarioTipoPk;

    /**
     * @ORM\Column(name="nombre" ,type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="salarioTipoRel")
     */
    private $contratoSalarioTipoRel;

    /**
     * @return mixed
     */
    public function getCodigoSalarioTipoPk()
    {
        return $this->codigoSalarioTipoPk;
    }

    /**
     * @param mixed $codigoSalarioTipoPk
     */
    public function setCodigoSalarioTipoPk($codigoSalarioTipoPk): void
    {
        $this->codigoSalarioTipoPk = $codigoSalarioTipoPk;
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
    public function getContratoSalarioTipoRel()
    {
        return $this->contratoSalarioTipoRel;
    }

    /**
     * @param mixed $contratoSalarioTipoRel
     */
    public function setContratoSalarioTipoRel($contratoSalarioTipoRel): void
    {
        $this->contratoSalarioTipoRel = $contratoSalarioTipoRel;
    }


}
