<?php

namespace App\Controller\RecursoHumano;

use App\Entity\RecursoHumano\RhuEmpleado;
use App\Form\RecursoHumano\RhuEmpleadoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RhuEmpleadoController extends Controller
{
    /**
     * @Route("/empleado/", name="empleado_lista")
     */
    public function lista(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $arEmpleado = $em->getRepository('App:RecursoHumano\RhuEmpleado')->findAll();


        return $this->render('RecursoHumano/empleado/lista.html.twig', [
            'arEmpleado' => $arEmpleado,
        ]);
    }

    /**
     * @Route("/empleado/nuevo/{codigoEmpleado}" , name="empleado_nuevo")
     */
    public function nuevoEmpleado(Request $request, $codigoEmpleado)
    {

        $em = $this->getDoctrine()->getManager();
        $arEmpleado = new RhuEmpleado();
        if ($codigoEmpleado != 0) {
            $arEmpleado = $em->getRepository('App:RecursoHumano\RhuEmpleado')->lista($codigoEmpleado);
        }
        $form = $this->createForm(RhuEmpleadoType::class, $arEmpleado);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arEmpleado = $form->getData();

            $arEmpleado->setNombreCompleto(strtoupper($arEmpleado->getNombre1() . " " . $arEmpleado->getNombre2() . " " . $arEmpleado->getApellido1() . " " . $arEmpleado->getApellido2()));

            $em->persist($arEmpleado);
            $em->flush();


            if ($codigoEmpleado != 0) {
                return $this->redirectToRoute('empleado_detalle', array('codigoEmpleado' => $codigoEmpleado));
            } else {
                return $this->redirectToRoute('empleado_lista');
            }
        }
        return $this->render('RecursoHumano/empleado/nuevo.html.twig' , array(
            'arEmpleado' => $arEmpleado,
            'form' => $form->createView()));
    }

    /**
     * @Route("/empleado/detalle/{codigoEmpleado}" , name="empleado_detalle")
     */
    public function detalleEmpleado(Request $request, $codigoEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        //$empleadoDetalle = new Empleado();
        $arEmpleadoDetalle = $em->getRepository(RhuEmpleado::class)->find($codigoEmpleado);
        $arContratos = $em->getRepository('App:RecursoHumano\RhuContrato')->findBy(array('codigoEmpleadoFk' => $codigoEmpleado));

        return $this->render('RecursoHumano/empleado/detalle.html.twig', array(
            'arEmpleadoDetalle' => $arEmpleadoDetalle,
            'arContratos' => $arContratos
        ));
    }


}
