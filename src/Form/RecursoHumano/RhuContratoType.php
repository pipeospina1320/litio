<?php

namespace App\Form\RecursoHumano;

use App\Entity\RecursoHumano\RhuCargo;
use App\Entity\General\GenCiudad;
use App\Entity\RecursoHumano\RhuContrato;
use App\Entity\RecursoHumano\RhuContratoTipo;
use App\Entity\SeguridadSocial\SSentidadCaja;
use App\Entity\SeguridadSocial\SSentidadCesantias;
use App\Entity\SeguridadSocial\SSentidadPension;
use App\Entity\SeguridadSocial\SSentidadSalud;
use App\Entity\RecursoHumano\RhuGrupoPago;
use App\Entity\RecursoHumano\RhuSalarioTipo;
use App\Entity\SeguridadSocial\SSclasificacionRiesgo;
use App\Entity\SeguridadSocial\SSsubTipoContizante;
use App\Entity\SeguridadSocial\SStipoCotizante;
use App\Entity\SeguridadSocial\SStipoPension;
use App\Entity\SeguridadSocial\SStipoSalud;
use App\Entity\RecursoHumano\RhuTiempoLaboradoTipo;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RhuContratoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grupoPagoRel', EntityType::class, array(
                'class' => RhuGrupoPago::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('contratoTipoRel', EntityType::class, array(
                'class' => RhuContratoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('tiempoLaboradoTipoRel', EntityType::class, array(
                'class' => RhuTiempoLaboradoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('salarioTipoRel', EntityType::class, array(
                'class' => RhuSalarioTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('cargoRel', EntityType::class, array(
                'class' => RhuCargo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ssTipoCotizanteRel', EntityType::class, array(
                'class' => SStipoCotizante::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ssSubtipoCotizanteRel', EntityType::class, array(
                'class' => SSsubTipoContizante::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ssTipoPensionRel', EntityType::class, array(
                'class' => SStipoPension::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ssTipoSaludRel', EntityType::class, array(
                'class' => SStipoSalud::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ssClasificacionRiesgoRel', EntityType::class, array(
                'class' => SSclasificacionRiesgo::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadPensionRel', EntityType::class, array(
                'class' => SSentidadPension::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadSaludRel', EntityType::class, array(
                'class' => SSentidadSalud::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadCesantiasRel', EntityType::class, array(
                'class' => SSentidadCesantias::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadCajaRel', EntityType::class, array(
                'class' => SSentidadCaja::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
//            ->add('ciudadContratoRel', EntityType::class, array(
//                'class' => Ciudad::class,
//                'placeholder' => '',
//                'attr' => array('class' => 'form-control'),
//                'choice_label' => 'nombre'
//            ))
            ->add('ciudadLaboraRel', EntityType::class, array(
                'class' => GenCiudad::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('fechaInicioContrato', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('fechaFinContrato', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('vrSalario', NumberType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => true
            ))
            ->add('auxilioTransporte', CheckboxType::class, array(
                'required' => false
            ))
            ->add('Guardar', SubmitType::class, array(
                'label' => 'Guardar',
                'attr' => array('class' => 'btn btn-primary pull-right'),
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => RhuContrato::class,
        ]);
    }
}
