<?php

namespace App\Form;

use App\Entity\Banco;
use App\Entity\Ciudad;
use App\Entity\CuentaBancoTipo;
use App\Entity\Departamento;
use App\Entity\Empleado;
use App\Entity\EmpleadoNumerosContacto;
use App\Entity\EmpleadoTipo;
use App\Entity\IdentidadSexo;
use App\Entity\IdentificacionTipo;
use App\Entity\LibretaTipo;
use App\Entity\RhTipo;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class EmpleadoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numIdentificacion', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => true
            ))
            ->add('identificacionTipoRel', EntityType::class, array(
                'class' => IdentificacionTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
            ))
            ->add('empleadoTipoRel', EntityType::class, array(
                'class' => EmpleadoTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('nombre1', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => true
            ))
            ->add('nombre2', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('apellido1', TextType::class, array(
                'attr' => array('class' => 'form-control')
            ))
            ->add('apellido2', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('fechaExpedicion', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                // prevents rendering it as type="date", to avoid HTML5 date pickers
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('fechaNacimiento', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'dd/MM/yyyy',
                'html5' => false,
                'attr' => array('class' => 'form-control', 'placeholder' => "DD/MM/YYYY")
            ))
            ->add('ciudadExpedicionRel', EntityType::class, array(
                'class' => Ciudad::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('ciudadNacimientoRel', EntityType::class, array(
                'class' => Ciudad::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
            ))
            ->add('rhTipoRel', EntityType::class, array(
                'class' => RhTipo::class,
                'placeholder' => '',
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre'
            ))
            ->add('libretaTipoRel', EntityType::class, array(
                'class' => LibretaTipo::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
            ))
            ->add('numLibreta', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('identidadSexoRel', EntityType::class, array(
                'class' => IdentidadSexo::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
                'required' => false
            ))
//            ->add('$numeroContactoRel',EntityType::class,array(
//                'attr' => array('class' =>'form-control'),
//                'class' => EmpleadoNumerosContacto::class,
//                'query_builder' => function(EntityRepository $er){
//                    return $er->createQueryBuilder('i')
//                        ->orderBy('i.codigoIdentificacionTipoPk' , 'ASC');
//                },
//                'choice_label' => 'nombre'
//            ))

            ->add('direccion', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('correo', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('cuentaBancoTipoRel', EntityType::class, array(
                'class' => CuentaBancoTipo::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
                'required' => false
            ))
            ->add('numCuentaBanco', TextType::class, array(
                'attr' => array('class' => 'form-control'),
                'required' => false
            ))
            ->add('bancoRel', EntityType::class, array(
                'class' => Banco::class,
                'attr' => array('class' => 'form-control'),
                'choice_label' => 'nombre',
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
            'data_class' => Empleado::class,
        ]);
    }
}
