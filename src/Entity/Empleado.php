<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="codigo_contrato_activo_fk", type="integer", nullable=true)
     */
    private $codigoContratoActivoFk;

    /**
     * @ORM\Column(name="codigo_empleado_tipo_fk", type="integer", nullable=true)
     */
    private $codigoEmpleadoTipoFk;

    /**
     * @ORM\Column(name="codigo_identificacion_tipo_fk", type="integer", nullable=true)
     */
    private $codigoIdentificacionTipoFk;

    /**
     * @ORM\Column(name="num_identificacion", type="string", nullable=false , unique=true)
     * @Assert\Type(
     *     type="integer",
     *     message="El valor ingresado {{ value }} no es valido {{ type }}.")
     *
     */
    private $numIdentificacion;

    /**
     * @ORM\Column(name="fecha_expedicion", type="date", nullable=true)
     */
    private $fechaExpedicion;

    /**
     * @ORM\Column(name="fecha_nacimiento", type="date", nullable=true)
     */
    private $fechaNacimiento;

    /**
     * @ORM\Column(name="nombre1" , type="string" , nullable=false)
     */
    private $nombre1;

    /**
     * @ORM\Column(name="nombre2", type="string" , nullable=true)
     */
    private $nombre2;

    /**
     * @ORM\Column(name="apellido1" , type="string", nullable=false)
     */
    private $apellido1;

    /**
     * @ORM\Column(name="apellido2" , type="string", nullable=true)
     */
    private $apellido2;

    /**
     * @ORM\Column(name="codigo_estado_civil_fk", type="integer" , nullable=true)
     */
    private $codigoEstadoCivilFk;

    /**
     * @ORM\Column(name="codigo_ciudad_nacimiento_fk" , type="integer" , nullable=true)
     */
    private $codigoCiudadNacimientoFk;

    /**
     * @ORM\Column(name="codigo_ciudad_expedicion_fk", type="integer" , nullable=true)
     */
    private $codigoCiudadExpedicionFk;

    /**
     * @ORM\Column(name="codigo_rh_fk" , type="integer" , nullable=true)
     */
    private $codigoRhFk;

    /**
     * @ORM\Column(name="codigo_libreta_tipo_fk", type="integer" , nullable=true)
     */
    private $codigoLibretaTipoFk;

    /**
     * @ORM\Column(name="num_libreta" , type="string", nullable=true)
     */
    private $numLibreta;

    /**
     * @ORM\Column(name="codigo_idenditad_sexo_fk", type="integer" , nullable=true)
     */
    private $codigoIdenditadSexoFk;

    /**
     * @ORM\Column(name="direccion" , type="string" , nullable=true)
     */
    private $direccion;

    /**
     * @ORM\Column(name="correo",type="string" , nullable= true)
     */
    private $correo;

    /**
     * @ORM\Column(name="codigo_cuenta_banco_tipo_fk" , type="integer" , nullable=true)
     */
    private $codigoCuentaBancoTipoFk;

    /**
     * @ORM\Column(name="num_cuenta_banco" , type="string" , nullable=true)
     */
    private $numCuentaBanco;

    /**
     * @ORM\Column(name="codigo_banco_fk" , type="integer" , nullable=true)
     */
    private $codigoBancoFk;

    /**
     * @ORM\Column(name="ruta_foto" , type="string" , nullable=true)
     */
    private $rutaFoto;

    /**
     * @ORM\Column(name="codigo_ultimo_contrato_fk" , type="integer" , nullable=true)
     */
    private $codigoUltimoContratoFk;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="empleadoContratoRel")
     */
    protected $contratosRel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EmpleadoNumerosContacto" , mappedBy="empleadoNumeroContactoRel")
     */
    protected $numeroContactoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EmpleadoTipo", inversedBy="empleadoEmpleadoTipoRel")
     * @ORM\JoinColumn(name="codigo_empleado_tipo_fk", referencedColumnName="codigo_empleado_tipo_pk")
     */
    private $empleadoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\IdentificacionTipo", inversedBy="empleadoIdentificacionRel")
     * @ORM\JoinColumn(name="codigo_identificacion_tipo_fk", referencedColumnName="codigo_identificacion_tipo_pk")
     */
    private $identificacionTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad", inversedBy="empleadoCiudadNacimientoRel")
     * @ORM\JoinColumn(name="codigo_ciudad_nacimiento_fk" , referencedColumnName="codigo_ciudad_pk")
     */
    private $ciudadNacimientoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ciudad", inversedBy="empleadoCiudadExpedicionRel")
     * @ORM\JoinColumn(name="codigo_ciudad_expedicion_fk" , referencedColumnName="codigo_ciudad_pk")
     */
    private $ciudadExpedicionRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\RhTipo" , inversedBy="empleadoRhTipoRel")
     * @ORM\JoinColumn(name="codigo_rh_fk" , referencedColumnName="codigo_rh_tipo_pk")
     */
    private $rhTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LibretaTipo", inversedBy="empleadoLibretaTipoRel")
     * @ORM\JoinColumn(name="codigo_libreta_tipo_fk" , referencedColumnName="codigo_libreta_tipo_pk")
     */
    private $libretaTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\IdentidadSexo", inversedBy="empleadoIdentidadSexoRel")
     * @ORM\JoinColumn(name="codigo_idenditad_sexo_fk" , referencedColumnName="codigo_identidad_sexo_pk")
     */
    private $identidadSexoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\CuentaBancoTipo" , inversedBy="empleadoCuentaBancoTipoRel")
     * @ORM\JoinColumn(name="codigo_cuenta_banco_tipo_fk" , referencedColumnName="codigo_cuenta_banco_tipo_pk")
     */
    private $cuentaBancoTipoRel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Banco" , inversedBy="empleadoBancoRel")
     * @ORM\JoinColumn(name="codigo_banco_fk" , referencedColumnName="codigo_banco_pk")
     */
    private $bancoRel;




    public function __construct() {
        $this->empleadoTipoRel = new \Doctrine\Common\Collections\ArrayCollection();

    }

    /**
     * @return mixed
     */
    public function getCodigoEmpleadoPk()
    {
        return $this->codigoEmpleadoPk;
    }

    /**
     * @param mixed $codigoEmpleadoPk
     */
    public function setCodigoEmpleadoPk($codigoEmpleadoPk): void
    {
        $this->codigoEmpleadoPk = $codigoEmpleadoPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoContratoActivoFk()
    {
        return $this->codigoContratoActivoFk;
    }

    /**
     * @param mixed $codigoContratoActivoFk
     */
    public function setCodigoContratoActivoFk($codigoContratoActivoFk): void
    {
        $this->codigoContratoActivoFk = $codigoContratoActivoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoEmpleadoTipoFk()
    {
        return $this->codigoEmpleadoTipoFk;
    }

    /**
     * @param mixed $codigoEmpleadoTipoFk
     */
    public function setCodigoEmpleadoTipoFk($codigoEmpleadoTipoFk): void
    {
        $this->codigoEmpleadoTipoFk = $codigoEmpleadoTipoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoIdentificacionTipoFk()
    {
        return $this->codigoIdentificacionTipoFk;
    }

    /**
     * @param mixed $codigoIdentificacionTipoFk
     */
    public function setCodigoIdentificacionTipoFk($codigoIdentificacionTipoFk): void
    {
        $this->codigoIdentificacionTipoFk = $codigoIdentificacionTipoFk;
    }

    /**
     * @return mixed
     */
    public function getNumIdentificacion()
    {
        return $this->numIdentificacion;
    }

    /**
     * @param mixed $numIdentificacion
     */
    public function setNumIdentificacion($numIdentificacion): void
    {
        $this->numIdentificacion = $numIdentificacion;
    }

    /**
     * @return mixed
     */
    public function getFechaExpedicion()
    {
        return $this->fechaExpedicion;
    }

    /**
     * @param mixed $fechaExpedicion
     */
    public function setFechaExpedicion($fechaExpedicion): void
    {
        $this->fechaExpedicion = $fechaExpedicion;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento): void
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getNombre1()
    {
        return $this->nombre1;
    }

    /**
     * @param mixed $nombre1
     */
    public function setNombre1($nombre1): void
    {
        $this->nombre1 = $nombre1;
    }

    /**
     * @return mixed
     */
    public function getNombre2()
    {
        return $this->nombre2;
    }

    /**
     * @param mixed $nombre2
     */
    public function setNombre2($nombre2): void
    {
        $this->nombre2 = $nombre2;
    }

    /**
     * @return mixed
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * @param mixed $apellido1
     */
    public function setApellido1($apellido1): void
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * @return mixed
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * @param mixed $apellido2
     */
    public function setApellido2($apellido2): void
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * @return mixed
     */
    public function getCodigoEstadoCivilFk()
    {
        return $this->codigoEstadoCivilFk;
    }

    /**
     * @param mixed $codigoEstadoCivilFk
     */
    public function setCodigoEstadoCivilFk($codigoEstadoCivilFk): void
    {
        $this->codigoEstadoCivilFk = $codigoEstadoCivilFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoCiudadNacimientoFk()
    {
        return $this->codigoCiudadNacimientoFk;
    }

    /**
     * @param mixed $codigoCiudadNacimientoFk
     */
    public function setCodigoCiudadNacimientoFk($codigoCiudadNacimientoFk): void
    {
        $this->codigoCiudadNacimientoFk = $codigoCiudadNacimientoFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoCiudadExpedicionFk()
    {
        return $this->codigoCiudadExpedicionFk;
    }

    /**
     * @param mixed $codigoCiudadExpedicionFk
     */
    public function setCodigoCiudadExpedicionFk($codigoCiudadExpedicionFk): void
    {
        $this->codigoCiudadExpedicionFk = $codigoCiudadExpedicionFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoRhFk()
    {
        return $this->codigoRhFk;
    }

    /**
     * @param mixed $codigoRhFk
     */
    public function setCodigoRhFk($codigoRhFk): void
    {
        $this->codigoRhFk = $codigoRhFk;
    }

    /**
     * @return mixed
     */
    public function getCodigoLibretaTipoFk()
    {
        return $this->codigoLibretaTipoFk;
    }

    /**
     * @param mixed $codigoLibretaTipoFk
     */
    public function setCodigoLibretaTipoFk($codigoLibretaTipoFk): void
    {
        $this->codigoLibretaTipoFk = $codigoLibretaTipoFk;
    }

    /**
     * @return mixed
     */
    public function getNumLibreta()
    {
        return $this->numLibreta;
    }

    /**
     * @param mixed $numLibreta
     */
    public function setNumLibreta($numLibreta): void
    {
        $this->numLibreta = $numLibreta;
    }

    /**
     * @return mixed
     */
    public function getCodigoIdenditadSexoFk()
    {
        return $this->codigoIdenditadSexoFk;
    }

    /**
     * @param mixed $codigoIdenditadSexoFk
     */
    public function setCodigoIdenditadSexoFk($codigoIdenditadSexoFk): void
    {
        $this->codigoIdenditadSexoFk = $codigoIdenditadSexoFk;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion): void
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo): void
    {
        $this->correo = $correo;
    }

    /**
     * @return mixed
     */
    public function getCodigoCuentaBancoTipoFk()
    {
        return $this->codigoCuentaBancoTipoFk;
    }

    /**
     * @param mixed $codigoCuentaBancoTipoFk
     */
    public function setCodigoCuentaBancoTipoFk($codigoCuentaBancoTipoFk): void
    {
        $this->codigoCuentaBancoTipoFk = $codigoCuentaBancoTipoFk;
    }

    /**
     * @return mixed
     */
    public function getNumCuentaBanco()
    {
        return $this->numCuentaBanco;
    }

    /**
     * @param mixed $numCuentaBanco
     */
    public function setNumCuentaBanco($numCuentaBanco): void
    {
        $this->numCuentaBanco = $numCuentaBanco;
    }

    /**
     * @return mixed
     */
    public function getCodigoBancoFk()
    {
        return $this->codigoBancoFk;
    }

    /**
     * @param mixed $codigoBancoFk
     */
    public function setCodigoBancoFk($codigoBancoFk): void
    {
        $this->codigoBancoFk = $codigoBancoFk;
    }

    /**
     * @return mixed
     */
    public function getRutaFoto()
    {
        return $this->rutaFoto;
    }

    /**
     * @param mixed $rutaFoto
     */
    public function setRutaFoto($rutaFoto): void
    {
        $this->rutaFoto = $rutaFoto;
    }

    /**
     * @return mixed
     */
    public function getCodigoUltimoContratoFk()
    {
        return $this->codigoUltimoContratoFk;
    }

    /**
     * @param mixed $codigoUltimoContratoFk
     */
    public function setCodigoUltimoContratoFk($codigoUltimoContratoFk): void
    {
        $this->codigoUltimoContratoFk = $codigoUltimoContratoFk;
    }

    /**
     * @return mixed
     */
    public function getContratosRel()
    {
        return $this->contratosRel;
    }

    /**
     * @param mixed $contratosRel
     */
    public function setContratosRel($contratosRel): void
    {
        $this->contratosRel = $contratosRel;
    }

    /**
     * @return mixed
     */
    public function getNumeroContactoRel()
    {
        return $this->numeroContactoRel;
    }

    /**
     * @param mixed $numeroContactoRel
     */
    public function setNumeroContactoRel($numeroContactoRel): void
    {
        $this->numeroContactoRel = $numeroContactoRel;
    }

    /**
     * @return mixed
     */
    public function getEmpleadoTipoRel()
    {
        return $this->empleadoTipoRel;
    }

    /**
     * @param mixed $empleadoTipoRel
     */
    public function setEmpleadoTipoRel($empleadoTipoRel): void
    {
        $this->empleadoTipoRel = $empleadoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getIdentificacionTipoRel()
    {
        return $this->identificacionTipoRel;
    }

    /**
     * @param mixed $identificacionTipoRel
     */
    public function setIdentificacionTipoRel($identificacionTipoRel): void
    {
        $this->identificacionTipoRel = $identificacionTipoRel;
    }

    /**
     * @return mixed
     */
    public function getCiudadNacimientoRel()
    {
        return $this->ciudadNacimientoRel;
    }

    /**
     * @param mixed $ciudadNacimientoRel
     */
    public function setCiudadNacimientoRel($ciudadNacimientoRel): void
    {
        $this->ciudadNacimientoRel = $ciudadNacimientoRel;
    }

    /**
     * @return mixed
     */
    public function getCiudadExpedicionRel()
    {
        return $this->ciudadExpedicionRel;
    }

    /**
     * @param mixed $ciudadExpedicionRel
     */
    public function setCiudadExpedicionRel($ciudadExpedicionRel): void
    {
        $this->ciudadExpedicionRel = $ciudadExpedicionRel;
    }

    /**
     * @return mixed
     */
    public function getRhTipoRel()
    {
        return $this->rhTipoRel;
    }

    /**
     * @param mixed $rhTipoRel
     */
    public function setRhTipoRel($rhTipoRel): void
    {
        $this->rhTipoRel = $rhTipoRel;
    }

    /**
     * @return mixed
     */
    public function getLibretaTipoRel()
    {
        return $this->libretaTipoRel;
    }

    /**
     * @param mixed $libretaTipoRel
     */
    public function setLibretaTipoRel($libretaTipoRel): void
    {
        $this->libretaTipoRel = $libretaTipoRel;
    }

    /**
     * @return mixed
     */
    public function getIdentidadSexoRel()
    {
        return $this->identidadSexoRel;
    }

    /**
     * @param mixed $identidadSexoRel
     */
    public function setIdentidadSexoRel($identidadSexoRel): void
    {
        $this->identidadSexoRel = $identidadSexoRel;
    }

    /**
     * @return mixed
     */
    public function getCuentaBancoTipoRel()
    {
        return $this->cuentaBancoTipoRel;
    }

    /**
     * @param mixed $cuentaBancoTipoRel
     */
    public function setCuentaBancoTipoRel($cuentaBancoTipoRel): void
    {
        $this->cuentaBancoTipoRel = $cuentaBancoTipoRel;
    }

    /**
     * @return mixed
     */
    public function getBancoRel()
    {
        return $this->bancoRel;
    }

    /**
     * @param mixed $bancoRel
     */
    public function setBancoRel($bancoRel): void
    {
        $this->bancoRel = $bancoRel;
    }

}


