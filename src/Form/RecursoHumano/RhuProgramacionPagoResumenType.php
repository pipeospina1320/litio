<?php

namespace App\Form\RecursoHumano;

use App\Entity\RecursoHumano\RhuProgramacionPagoResumen;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RhuProgramacionPagoResumenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('BtnCargarContratos', SubmitType::class, array('label' => 'Cargar contratos'));;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RhuProgramacionPagoResumen::class,
        ]);
    }
}
