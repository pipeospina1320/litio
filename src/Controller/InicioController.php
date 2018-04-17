<?php
/**
 * Created by PhpStorm.
 * User: pipe
 * Date: 19/02/2018
 * Time: 1:32 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class InicioController extends Controller
{

    /**
     * @Route("/" , name="inicio")
     */
    public function inicio()
    {
        return $this->render('Inicio/index.html.twig');
    }
}