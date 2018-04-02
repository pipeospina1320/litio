<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CiudadRepository")
 */
class Ciudad
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="codigo_ciudad_pk", type="integer")
     */
    private $codigoCiudadPk;

    /**
     * @ORM\Column(name="codigo_departamento_fk", type="integer")
     */
    private $codigoDepartamentoFk;

   /**
    * @ORM\Column(name="nombre", type="string")
    */
   private $nombre;

    /**
     * @ORM\Column(name="codigo_municipio_dane" ,type="string" )
     */
    private $codigoMunicipioDane;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Departamento" , inversedBy="departamentoCiudadRel")
     * @ORM\JoinColumn(name="codigo_departamento_fk" ,referencedColumnName="codigo_departamento_pk")
     */
    private $departamentoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Empleado" , mappedBy="ciudadNacimientoRel")
     */
    private $empleadoCiudadNacimientoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Empleado" , mappedBy="ciudadExpedicionRel")
     */
    private $empleadoCiudadExpedicionRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="ciudadContratoRel")
     */
    private $contratoCiudadContratoRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="ciudadLaboraRel")
     */
    private $contratoCiudadLaboraRel;

    /**
     * @return mixed
     */
    public function getCodigoCiudadPk()
    {
        return $this->codigoCiudadPk;
    }

    /**
     * @param mixed $codigoCiudadPk
     */
    public function setCodigoCiudadPk($codigoCiudadPk): void
    {
        $this->codigoCiudadPk = $codigoCiudadPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoDepartamentoFk()
    {
        return $this->codigoDepartamentoFk;
    }

    /**
     * @param mixed $codigoDepartamentoFk
     */
    public function setCodigoDepartamentoFk($codigoDepartamentoFk): void
    {
        $this->codigoDepartamentoFk = $codigoDepartamentoFk;
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
    public function getCodigoMunicipioDane()
    {
        return $this->codigoMunicipioDane;
    }

    /**
     * @param mixed $codigoMunicipioDane
     */
    public function setCodigoMunicipioDane($codigoMunicipioDane): void
    {
        $this->codigoMunicipioDane = $codigoMunicipioDane;
    }

    /**
     * @return mixed
     */
    public function getDepartamentoRel()
    {
        return $this->departamentoRel;
    }

    /**
     * @param mixed $departamentoRel
     */
    public function setDepartamentoRel($departamentoRel): void
    {
        $this->departamentoRel = $departamentoRel;
    }

    /**
     * @return mixed
     */
    public function getEmpleadoCiudadNacimientoRel()
    {
        return $this->empleadoCiudadNacimientoRel;
    }

    /**
     * @param mixed $empleadoCiudadNacimientoRel
     */
    public function setEmpleadoCiudadNacimientoRel($empleadoCiudadNacimientoRel): void
    {
        $this->empleadoCiudadNacimientoRel = $empleadoCiudadNacimientoRel;
    }

    /**
     * @return mixed
     */
    public function getEmpleadoCiudadExpedicionRel()
    {
        return $this->empleadoCiudadExpedicionRel;
    }

    /**
     * @param mixed $empleadoCiudadExpedicionRel
     */
    public function setEmpleadoCiudadExpedicionRel($empleadoCiudadExpedicionRel): void
    {
        $this->empleadoCiudadExpedicionRel = $empleadoCiudadExpedicionRel;
    }

    /**
     * @return mixed
     */
    public function getContratoCiudadContratoRel()
    {
        return $this->contratoCiudadContratoRel;
    }

    /**
     * @param mixed $contratoCiudadContratoRel
     */
    public function setContratoCiudadContratoRel($contratoCiudadContratoRel): void
    {
        $this->contratoCiudadContratoRel = $contratoCiudadContratoRel;
    }

    /**
     * @return mixed
     */
    public function getContratoCiudadLaboraRel()
    {
        return $this->contratoCiudadLaboraRel;
    }

    /**
     * @param mixed $contratoCiudadLaboraRel
     */
    public function setContratoCiudadLaboraRel($contratoCiudadLaboraRel): void
    {
        $this->contratoCiudadLaboraRel = $contratoCiudadLaboraRel;
    }


}
