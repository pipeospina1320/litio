<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CuentaBancoTipoRepository")
 */
class CuentaBancoTipo
{
    /**
     * @ORM\Id
     * @ORM\Column(name="codigo_cuenta_banco_tipo_pk", type="integer")
     */
    private $codigoCuentaBancoTipoPk;

    /**
     * @ORM\Column(name="nombre", type="string")
     */
    private $nombre;

    /**
     * @return mixed
     */
    public function getCodigoCuentaBancoTipoPk()
    {
        return $this->codigoCuentaBancoTipoPk;
    }

    /**
     * @param mixed $codigoCuentaBancoTipoPk
     */
    public function setCodigoCuentaBancoTipoPk($codigoCuentaBancoTipoPk): void
    {
        $this->codigoCuentaBancoTipoPk = $codigoCuentaBancoTipoPk;
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
