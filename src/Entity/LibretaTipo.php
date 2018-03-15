<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LibretaTipoRepository")
 */
class LibretaTipo
{
    /**
     * @ORM\Id()
     * @ORM\Column(name="codigo_libreta_tipo_pk" , type="integer")
     */
    private $codigoLibretaTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @return mixed
     */
    public function getCodigoLibretaTipoPk()
    {
        return $this->codigoLibretaTipoPk;
    }

    /**
     * @param mixed $codigoLibretaTipoPk
     */
    public function setCodigoLibretaTipoPk($codigoLibretaTipoPk): void
    {
        $this->codigoLibretaTipoPk = $codigoLibretaTipoPk;
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


}
