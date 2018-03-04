<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmpleadoController extends Controller
{
    /**
     * @Route("/empleado", name="empleado_lista")
     */
    public function lista()
    {
        $em = $this->getDoctrine()->getManager();
        $arEmpleado= $em->getRepository('App:Empleado')->findAll();


        return $this->render('empleado/lista.html.twig', [
            'arEmpleado' => $arEmpleado,
        ]);
    }

    public function nuevoEmpleado()
    {
        $em = $this->getDoctrine()->getManager();

    }
}
