<?php

namespace App\Form;

use App\Entity\Cargo;
use App\Entity\Ciudad;
use App\Entity\Contrato;
use App\Entity\ContratoMotivoTerminacion;
use App\Entity\ContratoTipo;
use App\Entity\Empleado;
use App\Entity\EntidadCaja;
use App\Entity\EntidadCesantias;
use App\Entity\EntidadPension;
use App\Entity\EntidadSalud;
use App\Entity\GrupoPago;
use App\Entity\SalarioTipo;
use App\Entity\SSclasificacionRiesgo;
use App\Entity\SSsubTipoContizante;
use App\Entity\SStipoCotizante;
use App\Entity\SStipoPension;
use App\Entity\SStipoSalud;
use App\Entity\TiempoLaboradoTipo;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContratoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('grupoPagoRel', EntityType::class, array(
                'class' => GrupoPago::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('contratoTipoRel', EntityType::class, array(
                'class' => ContratoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('tiempoLaboradoTipoRel', EntityType::class, array(
                'class' => TiempoLaboradoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('salarioTipoRel', EntityType::class, array(
                'class' => SalarioTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('cargoRel', EntityType::class, array(
                'class' => Cargo::class,
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
                'class' => EntidadPension::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadSaludRel', EntityType::class, array(
                'class' => EntidadSalud::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadCesantiasRel', EntityType::class, array(
                'class' => EntidadCesantias::class,
                'placeholder' => '',
                'required' => false,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('entidadCajaRel', EntityType::class, array(
                'class' => EntidadCaja::class,
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
                'class' => Ciudad::class,
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
            'data_class' => Contrato::class,
        ]);
    }
}
