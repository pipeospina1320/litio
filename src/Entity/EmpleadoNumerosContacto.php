<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmpleadoNumerosContactoRepository")
 */
class EmpleadoNumerosContacto
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Empleado" , inversedBy="numeroContactoRel")
     * @ORM\JoinColumn(name="codigo_empleado_fk" , referencedColumnName="codigo_empleado_pk")
     */
    private $empleadoNumeroContactoRel;

}
