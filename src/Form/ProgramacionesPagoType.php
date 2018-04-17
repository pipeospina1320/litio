<?php

namespace App\Form;

use App\Entity\GrupoPago;
use App\Entity\PagoTipo;
use App\Entity\ProgramacionPago;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProgramacionesPagoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fechaDesde', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('fechaHasta', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('pagoTipoRel', EntityType::class, array(
                'class' => PagoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('grupoPagoRel', EntityType::class, array(
                'class' => GrupoPago::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('dias', NumberType::class, array(
                'attr' => array('class' => 'form-control')
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
            'data_class' => ProgramacionPago::class,
        ]);
    }
}
