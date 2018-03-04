<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmpleadoTipoRepository")
 */
class EmpleadoTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_empleado_tipo_pk" , type="integer")
     */
    private $codigoEmpleadoTipoPk;

    // add your own fields
}
