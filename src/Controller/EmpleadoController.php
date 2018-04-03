<?php

namespace App\Controller;

use App\Entity\Empleado;
use App\Form\EmpleadoType;
use Doctrine\ORM\Mapping\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;


class EmpleadoController extends Controller
{
    /**
     * @Route("empleado/", name="empleado_lista")
     */
    public function lista(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $arEmpleado = $em->getRepository('App:Empleado')->findAll();


        return $this->render('empleado/lista.html.twig', [
            'arEmpleado' => $arEmpleado,
        ]);
    }

    /**
     * @Route("empleado/nuevo/{codigoEmpleado}" , name="empleado_nuevo")
     */
    public function nuevoEmpleado(Request $request, $codigoEmpleado)
    {
        /**
         * @var $arEmpleado Empleado
         */
        $em = $this->getDoctrine()->getManager();
        $arEmpleado = new Empleado();
        if ($codigoEmpleado != 0) {
            $arEmpleado = $em->getRepository('App:Empleado')->find($codigoEmpleado);
        }
        $form = $this->createForm(EmpleadoType::class, $arEmpleado);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arEmpleado = $form->getData();
//            $arEmpleado->setFechaExpedicion(date_create($arEmpleado->getFechaExpedicion()));
//            $arEmpleado->setFechaNacimiento(date_create($arEmpleado->getFechaNacimiento()));
            $arEmpleado->setNombreCompleto($arEmpleado->getNombre1() . " " . $arEmpleado->getNombre2() . " " . $arEmpleado->getApellido1() . " " . $arEmpleado->getApellido2());

            $em->persist($arEmpleado);
            $em->flush();



            if ($codigoEmpleado != 0) {
                return $this->redirectToRoute('empleado_detalle' ,array('codigoEmpleado'=> $codigoEmpleado));
            } else {
                return $this->redirectToRoute('empleado_lista');
            }
        }
        return $this->render('empleado/nuevo.html.twig', array(
            'arEmpleado' => $arEmpleado,
            'form' => $form->createView()));
    }

    /**
     * @Route("empleado/detalle/{codigoEmpleado}" , name="empleado_detalle")
     */
    public function detalleEmpleado(Request $request, $codigoEmpleado)
    {
        $em = $this->getDoctrine()->getManager();
        //$empleadoDetalle = new Empleado();
        $arEmpleadoDetalle = $em->getRepository(Empleado::class)->find($codigoEmpleado);
        $arContratos = $em->getRepository('App:Contrato')->findBy(array('codigoEmpleadoFk' => $codigoEmpleado));

        return $this->render('empleado/detalle.html.twig', array(
            'arEmpleadoDetalle' => $arEmpleadoDetalle,
            'arContratos' => $arContratos
        ));
    }


}
