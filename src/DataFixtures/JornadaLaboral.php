<?php

namespace App\DataFixtures;

use App\Entity\RecursoHumano\RhuTiempoLaboradoTipo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class JornadaLaboral extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arTiempoLaboradoTipo = $manager->getRepository('App\Entity\RecursoHumano\RhuTiempoLaboradoTipo')->find(1);
        if (!$arTiempoLaboradoTipo) {
            $arTiempoLaboradoTipo = new RhuTiempoLaboradoTipo();
            $arTiempoLaboradoTipo->setCodigoTiempoLaboradoPk(1);
            $arTiempoLaboradoTipo->setNombre('Tiempo completo');
            $manager->persist($arTiempoLaboradoTipo);
        }
        $arTiempoLaboradoTipo = $manager->getRepository('App\Entity\RecursoHumano\RhuTiempoLaboradoTipo')->find(2);
        if (!$arTiempoLaboradoTipo) {
            $arTiempoLaboradoTipo = new RhuTiempoLaboradoTipo();
            $arTiempoLaboradoTipo->setCodigoTiempoLaboradoPk(2);
            $arTiempoLaboradoTipo->setNombre('Medio tiempo');
            $manager->persist($arTiempoLaboradoTipo);
        }
        $manager->flush();
    }
}
