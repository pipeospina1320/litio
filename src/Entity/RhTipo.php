<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RhTipoRepository")
 */
class RhTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_rh_tipo_pk" ,type="integer")
     */
    private $codigoRhTipoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @return mixed
     */
    public function getCodigoRhTipoPk()
    {
        return $this->codigoRhTipoPk;
    }

    /**
     * @param mixed $codigoRhTipoPk
     */
    public function setCodigoRhTipoPk($codigoRhTipoPk): void
    {
        $this->codigoRhTipoPk = $codigoRhTipoPk;
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
