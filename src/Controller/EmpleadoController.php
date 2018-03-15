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
        $em = $this->getDoctrine()->getManager();
        $arEmpleado = new Empleado();

        $form = $this->createForm(EmpleadoType::class, $arEmpleado);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->get('Guardar')->isClicked()) {
                $arEmpleado = $form->getData();
                $em->persist($arEmpleado);
                $em->flush();
            }
            return $this->redirectToRoute('empleado_lista');
        }


        return $this->render('empleado/nuevo.html.twig', [
            'form' => $form->createView()]);

    }


}
