<?php

namespace App\Controller\RecursoHumano;


use App\Entity\RecursoHumano\RhuProgramacionPago;
use App\Form\ProgramacionesPagoType;
use App\Form\RecursoHumano\RhuProgramacionesPagoType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class RhuProgramacionesPagoController extends Controller
{
    /**
     * @Route("/programacion/pago", name="programacion_pago_lista")
     */
    public function lista()
    {
        $em = $this->getDoctrine()->getManager();
        $arProgramacionesPago = $em->getRepository('App:RecursoHumano\RhuProgramacionPago')->findAll();

        return $this->render('RecursoHumano/ProgramacionesPago/lista.html.twig', array(
            'arProgramacionesPago' => $arProgramacionesPago,
        ));
    }


    /**
     * @Route("/programacion/pago/nuevo/{codigoProgramacionPago}" , name="programacion_pago_nuevo")
     */
    public function nuevo(Request $request, $codigoProgramacionPago)
    {
        $em = $this->getDoctrine()->getManager();
        $arProgramacionPago = new RhuProgramacionPago();
//        $arProgramacionPago = $em->getRepository('App:ProgramacionPago')->find($codigoProgramacionPago);

        $form = $this->createForm(RhuProgramacionesPagoType::class, $arProgramacionPago);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $arProgramacionPago = $form->getData();
            $em->persist($arProgramacionPago);
            $em->flush();
            return $this->redirectToRoute('programacion_pago_resumen', array('codigoProgramacionPago' => $arProgramacionPago->getCodigoProgramacionPagoPk()));

        }
        return $this->render('RecursoHumano/ProgramacionesPago/nuevo.html.twig', array(
            'form' => $form->createView(),
            'arProgramacionPago' => $arProgramacionPago
        ));

    }

    /**
     * @Route("/programacion/pago/resumen/{codigoProgramacionPago}" , name="programacion_pago_resumen")
     *
     */
    public function Detalle(Request $request, $codigoProgramacionPago)
    {
        $em = $this->getDoctrine()->getManager();
        $arProgramacion = $em->getRepository('App:RecursoHumano\RhuProgramacionPago')->find($codigoProgramacionPago);
        $arProgramacionResumen = $em->getRepository('App:RecursoHumano\RhuProgramacionPagoResumen')->findBy(array('codigoProgramacionPagoFk' => $codigoProgramacionPago));
        $form = $this->formularioDetalle();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            if ($form->get('btnCargarContratos')->isClicked()) {
                $em->getRepository('App:RecursoHumano\RhuProgramacionPagoResumen')->cargarContratos($codigoProgramacionPago);

                return $this->redirectToRoute('programacion_pago_resumen', array('codigoProgramacionPago' => $codigoProgramacionPago));
            }
        }

        return $this->render('RecursoHumano/ProgramacionesPago/detalle.html.twig', array(
            'arProgramacion' => $arProgramacion,
            'arProgramacionResumen' => $arProgramacionResumen,
            'form' => $form->createView()
        ));

    }

    private function formularioDetalle()
    {
        $form = $this->createFormBuilder()
            ->add('btnCargarContratos', SubmitType::class, array(
                'attr' => array('class' => 'btn btn-primary pull-right'),
                'label' => 'Cargar contratos'))
            ->getForm();
        return $form;
    }


}
