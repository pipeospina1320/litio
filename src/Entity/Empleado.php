<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmpleadoRepository")
 */
class Empleado
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="codigo_empleado_pk",type="integer")
     */
    private $codigoEmpleadoPk;


    /**
     * @ORM\Column(name="codigo_contrato_activo_fk", type="integer")
     */
    private $codigoContratoActivoFk;

    /**
     * @ORM\Column(name="codigo_empleado_tipo_fk", type="integer")
     */
    private $codigoEmpleadoTipoFk;

    /**
     * @ORM\Column(name="codigo_tipo_identificacion_fk", type="integer")
     */
    private $codigoTipoIdentificacionFk;

    /**
     * @ORM\Column(name="num_identidicacion", type="string", nullable=false , unique=true)
     */
    private $numIdentidicacion;

    /**
     * @ORM\Column(name="fecha_expedicion", type="date")
     */
    private $fechaExpedicion;

    /**
     * @ORM\Column(name="fecha_nacimiento", type="date")
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(name="nombre1" , type="string")
     */
    private $nombre1;

    /**
     * @ORM\Column(name="nombre2", type="string")
     */
    private $nombre2;

    /**
     * @ORM\Column(name="apellido1" , type="string")
     */
    private $apellido1;

    /**
     * @ORM\Column(name="apellido2" , type="string")
     */
    private $apellido2;

    /**
     * @ORM\Column(name="codigo_estado_civil_fk", type="integer")
     */
    private $codigoEstadoCivilFk;

    /**
     * @ORM\Column(name="codigo_ciudad_nacimiento_fk" , type="integer")
     */
    private $codigoCiudadNacimientoFk;

    /**
     * @ORM\Column(name="codigo_ciudad_expedicion_fk", type="integer")
     */
    private $codigoCiudadExpedicionFk;

    /**
     * @ORM\Column(name="codigo_rh_fk" , type="integer")
     */
    private $codigoRhFk;

    /**
     * @ORM\Column(name="codigo_tipo_libreta", type="integer")
     */
    private $codigoTipoLibretaFk;

    /**
     * @ORM\Column(name="num_libreta" , type="string")
     */
    private $numLibreta;

    /**
     * @ORM\Column(name="codigo_sexo_fk", type="integer")
     */
    private $codigoSexoFk;

    /**
     * @ORM\Column(name="telefono" , type="string")
     */
    private $telefono;

    /**
     * @ORM\Column(name="celular", type="string")
     */
    private $celular;

    /**
     * @ORM\Column(name="direccion" , type="string")
     */
    private $direccion;

    /**
     * @ORM\Column(name="correo",type="string")
     */
    private $correo;

    /**
     * @ORM\Column(name="tipo_cuenta_banco_fk" , type="string")
     */
    private $tipoCuentaBancoFk;

    /**
     * @ORM\Column(name="num_cuenta_banco" , type="string")
     */
    private $numCuentaBanco;

    /**
     * @ORM\Column(name="codigo_banco_fk" , type="integer")
     */
    private $codigoBancoFk;

    /**
     * @ORM\Column(name="ruta_foto" , type="string")
     */
    private $rutaFoto;

    /**
     * @ORM\Column(name="codigo_ultimo_contrato_fk" , type="integer")
     */
    private $codigoUltimoContratoFk;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="empleadoRel")
     */
    private $contratoEmpleadoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EmpleadoTipo", inversedBy="empleadoTipoRel")
     * @ORM\JoinColumn(name="codigo_tipo_empleado_fk", referencedColumnName="codigo_empleado_tipo_pk")
     */
    private $empleadoTipoRel;



}


