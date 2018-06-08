<?php

namespace App\Controller\RecursoHumano;

use App\Controller\ClasesGenerales\MensajesFlash;
use App\Entity\RecursoHumano\RhuContrato;
use App\Form\RecursoHumano\RhuContratoType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RhuContratoController extends Controller
{
    /**
     * @Route("/contrato/", name="contrato_lista")
     */
    public function lista(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $arContrato = $em->getRepository('App:RecursoHumano\RhuContrato')->findAll();


        return $this->render('RecursoHumano/contrato/lista.html.twig', [
            'arContrato' => $arContrato,
        ]);
    }

    /**
     * @Route("/contrato/nuevo/{codigoEmpleado}/{codigoContrato}" , name="contrato_nuevo")
     */
    public function nuevoEmpleado(Request $request, $codigoEmpleado, $codigoContrato)
    {
        /**
         * @var $arContrato Contrato
         * @var $arEmpleado Empleado
         */
        $em = $this->getDoctrine()->getManager();
        $arContrato = new RhuContrato();
        $mensajeFlash = new MensajesFlash();
        $arEmpleado = $em->getRepository('App\Entity\RecursoHumano\RhuEmpleado')->find($codigoEmpleado);

        if ($codigoContrato != 0) {
            $arContrato = $em->getRepository('App:Contrato')->find($codigoContrato);
        }
        //  valida si el empleado tiene un contrato activo
        if ($arEmpleado->getEstadoContratoActivo() == 1 && $codigoContrato = 0) {
            $mensajeFlash->Mensaje('warning', 'Actualmente el empleado tiene un contrato activo');
            return $this->redirectToRoute('empleado_detalle', array(
                'codigoEmpleado' => $codigoEmpleado
            ));
        }

        $form = $this->createForm(RhuContratoType::class, $arContrato);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->get('Guardar')->isClicked()) {
                if ($arContrato->getEstadoTerminado() == 1) {
                    //informacion del contrato
                    $arContrato = $form->getData();

                    $em->persist($arContrato);
                    $em->flush();

                    $mensajeFlash->Mensaje('info', 'Informacion guardada con exito');

                } else {
                    //informacion del contrato
                    $arContrato = $form->getData();
                    $arContrato->setContratoEmpleadoRel($arEmpleado);
                    $arContrato->setEstadoActivo(1);
                    $arContrato->setEstadoLiquidado(0);
                    $arContrato->setEstadoTerminado(0);
                    $arContrato->setFechaUltimoPago($arContrato->getFechaInicioContrato());
                    $arContrato->setFechaUltimoPagoCesantias($arContrato->getFechaInicioContrato());
                    $arContrato->setFechaUltimoPagoPrima($arContrato->getFechaInicioContrato());
                    $arContrato->setFechaUltimoPagoVacaciones($arContrato->getFechaInicioContrato());
                    $em->persist($arContrato);
                    $em->flush();

                    //informacion del empleado
                    $arEmpleado->setCodigoContratoActivoFk($arContrato->getCodigoContratoPk());
                    $arEmpleado->setEstadoContratoActivo(1);
                    $em->persist($arEmpleado);

                    $em->flush();
                }
                return $this->redirectToRoute('empleado_detalle', array('codigoEmpleado' => $codigoEmpleado));
            }
        }


        return $this->render('RecursoHumano/contrato/nuevo.html.twig', [
            'arEmpleado' => $arEmpleado,
            'arContrato' => $arContrato,
            'form' => $form->createView()]);
    }
}
