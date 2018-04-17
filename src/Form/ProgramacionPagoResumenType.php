<?php

namespace App\Form;

use App\Entity\ProgramacionPagoResumen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProgramacionPagoResumenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('BtnCargarContratos', SubmitType::class, array('label' => 'Cargar contratos'));;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProgramacionPagoResumen::class,
        ]);
    }
}
