<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PaisRepository")
 */
class Pais
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="codigo_pais_pk" ,type="integer")
     */
    private $codigoPaisPk;

    /**
     * @ORM\Column(name="nombre" , type="string" , nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(name="codigo_pais_estandar" , type="string", nullable=true)
     *
     */
    private $codigoPaisEstandar;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Departamento" , mappedBy="paisRel")
     */
    private $departamentoPaisRel;

    /**
     * @return mixed
     */
    public function getCodigoPaisPk()
    {
        return $this->codigoPaisPk;
    }

    /**
     * @param mixed $codigoPaisPk
     */
    public function setCodigoPaisPk($codigoPaisPk): void
    {
        $this->codigoPaisPk = $codigoPaisPk;
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
    public function getCodigoPaisEstandar()
    {
        return $this->codigoPaisEstandar;
    }

    /**
     * @param mixed $codigoPaisEstandar
     */
    public function setCodigoPaisEstandar($codigoPaisEstandar): void
    {
        $this->codigoPaisEstandar = $codigoPaisEstandar;
    }

    /**
     * @return mixed
     */
    public function getDepartamentoPaisRel()
    {
        return $this->departamentoPaisRel;
    }

    /**
     * @param mixed $departamentoPaisRel
     */
    public function setDepartamentoPaisRel($departamentoPaisRel): void
    {
        $this->departamentoPaisRel = $departamentoPaisRel;
    }




}
