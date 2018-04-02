<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CargoRepository")
 */
class Cargo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_cargo_pk", type="integer")
     */
    private $codigoCargoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="cargoRel")
     */
    private $contratoCargoRel;

    /**
     * @return mixed
     */
    public function getCodigoCargoPk()
    {
        return $this->codigoCargoPk;
    }

    /**
     * @param mixed $codigoCargoPk
     */
    public function setCodigoCargoPk($codigoCargoPk): void
    {
        $this->codigoCargoPk = $codigoCargoPk;
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
    public function getContratoCargoRel()
    {
        return $this->contratoCargoRel;
    }

    /**
     * @param mixed $contratoCargoRel
     */
    public function setContratoCargoRel($contratoCargoRel): void
    {
        $this->contratoCargoRel = $contratoCargoRel;
    }


}
