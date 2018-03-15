<?php

namespace App\Form;

use App\Entity\Empleado;
use App\Entity\EmpleadoTipo;
use App\Entity\IdentificacionTipo;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numIdentificacion', TextType::class, array(
                'attr' => array('class' => 'form-control',
                    'place_holder' => 'numero identificacion')
            ))
//            ->add('identificacionTipoRel', EntityType::class, array(
//                'attr' => array('class' => 'form-control'),
//                'class' => IdentificacionTipo::class,
//                'query_builder' => function (EntityRepository $er) {
//                    return $er->createQueryBuilder('i')
//                        ->orderBy('i.codigoIdentificacionTipoPk', 'ASC');
//                },
//                'choice_label' => 'nombre'))

//            ->add('identificacionTipoRel',EntityType::class,array(
//                'attr' => array('class' =>'form-control'),
//                'class' => IdentificacionTipo::class,
//                'query_builder' => function(EntityRepository $er){
//                    return $er->createQueryBuilder('i')
//                        ->orderBy('i.codigoIdentificacionTipoPk' , 'ASC');
//                },
//                'choice_label' => 'nombre'
//            ))
            ->add('identificacionTipoRel', EntityType::class, array(
                'class' => IdentificacionTipo::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',))

            ->add('empleadoTipoRel', EntityType::class, array(
                'class' => EmpleadoTipo::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',))

//            ->add('empleadoTipoRel',EntityType::class, array(
//                'attr' => array('class' =>'form-control'),
//                'class' => EmpleadoTipo::class,
//                'query_builder' => function(EntityRepository $er){
//                    return $er->createQueryBuilder('e')
//                        ->orderBy('e.nombre' , 'ASC');
//                },
//                'choice_label' => 'nombre'
//            ))

            ->add('nombre1', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('nombre2', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('apellido1', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('apellido2', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
//
            ->add('fechaExpedicion', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd-MM-yyyy',
                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'attr' => array( 'class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))



            ->add('Guardar', SubmitType::class, array(
                'label' => 'Gurdar',
                'attr' => array('class' => 'btn btn-primary pull-right'),
            ))
           ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // uncomment if you want to bind to a class
            'data_class' => Empleado::class,
        ]);
    }
}
