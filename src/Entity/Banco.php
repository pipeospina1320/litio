<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BancoRepository")
 */
class Banco
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="codigo_banco_pk",type="integer")
     */
    private $codigoBancoPk;

    /**
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @return mixed
     */
    public function getCodigoBancoPk()
    {
        return $this->codigoBancoPk;
    }

    /**
     * @param mixed $codigoBancoPk
     */
    public function setCodigoBancoPk($codigoBancoPk): void
    {
        $this->codigoBancoPk = $codigoBancoPk;
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
