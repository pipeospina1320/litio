<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepartamentoRepository")
 */
class Departamento
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="codigo_departamento_pk",type="integer")
     */
    private $codigoDepartamentoPk;

    /**
     * @ORM\Column(name="codigo_pais_fk" , type="integer")
     */
    private $codigoPaisFk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\Column(name="codigo_dane" , type="string")
     */
    private $codigoDane;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pais" , inversedBy="departamentoPaisRel")
     * @ORM\JoinColumn(name="codigo_pais_fk" , referencedColumnName="codigo_pais_pk")
     */
    private $paisRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ciudad" ,mappedBy="departamentoRel")
     */
    private $departamentoCiudadRel;

    /**
     * @return mixed
     */
    public function getCodigoDepartamentoPk()
    {
        return $this->codigoDepartamentoPk;
    }

    /**
     * @param mixed $codigoDepartamentoPk
     */
    public function setCodigoDepartamentoPk($codigoDepartamentoPk): void
    {
        $this->codigoDepartamentoPk = $codigoDepartamentoPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoPaisFk()
    {
        return $this->codigoPaisFk;
    }

    /**
     * @param mixed $codigoPaisFk
     */
    public function setCodigoPaisFk($codigoPaisFk): void
    {
        $this->codigoPaisFk = $codigoPaisFk;
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
    public function getCodigoDane()
    {
        return $this->codigoDane;
    }

    /**
     * @param mixed $codigoDane
     */
    public function setCodigoDane($codigoDane): void
    {
        $this->codigoDane = $codigoDane;
    }

    /**
     * @return mixed
     */
    public function getPaisRel()
    {
        return $this->paisRel;
    }

    /**
     * @param mixed $paisRel
     */
    public function setPaisRel($paisRel): void
    {
        $this->paisRel = $paisRel;
    }

    /**
     * @return mixed
     */
    public function getDepartamentoCiudadRel()
    {
        return $this->departamentoCiudadRel;
    }

    /**
     * @param mixed $departamentoCiudadRel
     */
    public function setDepartamentoCiudadRel($departamentoCiudadRel): void
    {
        $this->departamentoCiudadRel = $departamentoCiudadRel;
    }


    // add your own fields
}
