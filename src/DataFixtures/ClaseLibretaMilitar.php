<?php

namespace App\DataFixtures;

use App\Entity\RecursoHumano\RhuLibretaTipo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ClaseLibretaMilitar extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arClaseLibreMilitar = $manager->getRepository('App:RecursoHumano\RhuLibretaTipo')->find(1);
        if (!$arClaseLibreMilitar) {
            $arClaseLibreMilitar = new RhuLibretaTipo();
            $arClaseLibreMilitar->setCodigoLibretaTipoPk(1);
            $arClaseLibreMilitar->setNombre('No aplica');
            $manager->persist($arClaseLibreMilitar);
        }
        $arClaseLibreMilitar = $manager->getRepository('App:RecursoHumano\RhuLibretaTipo')->find(2);
        if (!$arClaseLibreMilitar) {
            $arClaseLibreMilitar = new RhuLibretaTipo();
            $arClaseLibreMilitar->setCodigoLibretaTipoPk(2);
            $arClaseLibreMilitar->setNombre('Primera clase');
            $manager->persist($arClaseLibreMilitar);
        }
        $arClaseLibreMilitar = $manager->getRepository('App:RecursoHumano\RhuLibretaTipo')->find(3);
        if (!$arClaseLibreMilitar) {
            $arClaseLibreMilitar = new RhuLibretaTipo();
            $arClaseLibreMilitar->setCodigoLibretaTipoPk(3);
            $arClaseLibreMilitar->setNombre('Segunda clase');
            $manager->persist($arClaseLibreMilitar);
        }

        $manager->flush();
    }
}
