<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EmpleadoTipo extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arEmpleadoTipo = $manager->getRepository('App:EmpleadoTipo')->find(1);
        if(!$arEmpleadoTipo){
            $arEmpleadoTipo = new \App\Entity\EmpleadoTipo();
            $arEmpleadoTipo->setCodigoEmpleadoTipoPk(1);
            $arEmpleadoTipo->setNombre('Administrativo');
            $manager->persist($arEmpleadoTipo);
        }
        $arEmpleadoTipo = $manager->getRepository('App:EmpleadoTipo')->find(2);
        if(!$arEmpleadoTipo){
            $arEmpleadoTipo = new \App\Entity\EmpleadoTipo();
            $arEmpleadoTipo->setCodigoEmpleadoTipoPk(2);
            $arEmpleadoTipo->setNombre('Operativo');
            $manager->persist($arEmpleadoTipo);
        }
        $manager->flush();
    }
}
