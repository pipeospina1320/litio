<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class JornadaLaboral extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arTiempoLaboradoTipo = $manager->getRepository('App:TiempoLaboradoTipo')->find(1);
        if (!$arTiempoLaboradoTipo) {
            $arTiempoLaboradoTipo = new \App\Entity\TiempoLaboradoTipo();
            $arTiempoLaboradoTipo->setCodigoTiempoLaboradoPk(1);
            $arTiempoLaboradoTipo->setNombre('Tiempo completo');
            $manager->persist($arTiempoLaboradoTipo);
        }
        $arTiempoLaboradoTipo = $manager->getRepository('App:TiempoLaboradoTipo')->find(2);
        if (!$arTiempoLaboradoTipo) {
            $arTiempoLaboradoTipo = new \App\Entity\TiempoLaboradoTipo();
            $arTiempoLaboradoTipo->setCodigoTiempoLaboradoPk(2);
            $arTiempoLaboradoTipo->setNombre('Medio tiempo');
            $manager->persist($arTiempoLaboradoTipo);
        }
        $manager->flush();
    }
}
