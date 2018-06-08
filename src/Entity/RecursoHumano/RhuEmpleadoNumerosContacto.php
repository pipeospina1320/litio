<?php

namespace App\Entity\RecursoHumano;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RecursoHumano\RhuEmpleadoNumerosContactoRepository")
 */
class RhuEmpleadoNumerosContacto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_numero_contacto_pk", type="integer")
     */
    private $codigoNumeroContactoPk;

    /**
     * @ORM\Column(name="codigo_empleado_fk" , type="integer")
     */
    private $codigoEmpleadoFk;

    /**
     * @ORM\Column(name="numero" , type="integer")
     */
    private $numero;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RecursoHumano\RhuEmpleado" , inversedBy="numeroContactoRel")
     * @ORM\JoinColumn(name="codigo_empleado_fk" , referencedColumnName="codigo_empleado_pk")
     */
    private $empleadoNumeroContactoRel;

    /**
     * @return mixed
     */
    public function getCodigoNumeroContactoPk()
    {
        return $this->codigoNumeroContactoPk;
    }

    /**
     * @param mixed $codigoNumeroContactoPk
     */
    public function setCodigoNumeroContactoPk($codigoNumeroContactoPk): void
    {
        $this->codigoNumeroContactoPk = $codigoNumeroContactoPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEmpleadoFk()
    {
        return $this->codigoEmpleadoFk;
    }

    /**
     * @param mixed $codigoEmpleadoFk
     */
    public function setCodigoEmpleadoFk($codigoEmpleadoFk): void
    {
        $this->codigoEmpleadoFk = $codigoEmpleadoFk;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getEmpleadoNumeroContactoRel()
    {
        return $this->empleadoNumeroContactoRel;
    }

    /**
     * @param mixed $empleadoNumeroContactoRel
     */
    public function setEmpleadoNumeroContactoRel($empleadoNumeroContactoRel): void
    {
        $this->empleadoNumeroContactoRel = $empleadoNumeroContactoRel;
    }



}
