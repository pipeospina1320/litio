<?php

namespace App\Controller;

use App\Controller\ClasesGenerales\MensajesFlash;
use App\Entity\Contrato;
use App\Form\ContratoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContratoController extends Controller
{
    /**
     * @Route("contrato/", name="contrato_lista")
     */
    public function lista(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $arContrato = $em->getRepository('App:Contrato')->findAll();


        return $this->render('contrato/lista.html.twig', [
            'arContrato' => $arContrato,
        ]);
    }

    /**
     * @Route("contrato/nuevo/{codigoEmpleado}/{codigoContrato}" , name="contrato_nuevo")
     */
    public function nuevoEmpleado(Request $request, $codigoEmpleado, $codigoContrato)
    {
        /**
         * @var $arContrato Contrato
         */
        $em = $this->getDoctrine()->getManager();
        $arContrato = new Contrato();
        $mensajeFlash = new MensajesFlash();
        $arEmpleado = $em->getRepository('App:Empleado')->find($codigoEmpleado);
        if($codigoContrato != 0){
            $arContrato = $em->getRepository('App:Contrato')->find($codigoContrato);
        }
        $form = $this->createForm(ContratoType::class, $arContrato);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arContrato = $form->getData();


            $arContrato->setContratoEmpleadoRel($arEmpleado);
            $em->persist($arContrato);
            $em->flush();

            $mensajeFlash->Mensaje('info' , 'Informacion guardada con exito');

            return $this->redirectToRoute('empleado_detalle' ,array('codigoEmpleado'=> $codigoEmpleado));
        }
        return $this->render('contrato/nuevo.html.twig', [
            'arEmpleado' => $arEmpleado,
            'arContrato' => $arContrato,
            'form' => $form->createView()]);
    }
}
