<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GrupoPagoRepository")
 */
class GrupoPago
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="codigo_grupo_pago_pk" , type="integer")
     */
    private $codigoGrupoPagoPk;

    /**
     * @ORM\Column(name="nombre" , type="string")
     */
    private $nombre;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Contrato" , mappedBy="grupoPagoRel")
     */
    protected $contratoGrupoPagoRel;

    /**
     * @return mixed
     */
    public function getCodigoGrupoPagoPk()
    {
        return $this->codigoGrupoPagoPk;
    }

    /**
     * @param mixed $codigoGrupoPagoPk
     */
    public function setCodigoGrupoPagoPk($codigoGrupoPagoPk): void
    {
        $this->codigoGrupoPagoPk = $codigoGrupoPagoPk;
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
    public function getContratoGrupoPagoRel()
    {
        return $this->contratoGrupoPagoRel;
    }

    /**
     * @param mixed $contratoGrupoPagoRel
     */
    public function setContratoGrupoPagoRel($contratoGrupoPagoRel): void
    {
        $this->contratoGrupoPagoRel = $contratoGrupoPagoRel;
    }


}
