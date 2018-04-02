<?php
/**
 * Created by PhpStorm.
 * User: Pipe Ospina
 * Date: 1/04/2018
 * Time: 8:32 PM
 */

namespace App\Controller\ClasesGenerales;

use Symfony\Component\HttpFoundation\Session\Session;


class MensajesFlash
{
    public function Mensaje($key, $mensaje)
    {
        $session = new Session();
        $session->getFlashBag()->add($key, $mensaje);
    }

}