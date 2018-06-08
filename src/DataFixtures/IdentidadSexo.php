<?php

namespace App\DataFixtures;

use App\Entity\RecursoHumano\RhuIdentidadSexo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IdentidadSexo extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        $arIdentidadSexo = $manager->getRepository('App:RecursoHumano\RhuIdentidadSexo')->find(1);
//        if (!$arIdentidadSexo) {
//            $arIdentidadSexo = new RhuIdentidadSexo();
//            $arIdentidadSexo->setCodigoIdentidadSexoPk(1);
//            $arIdentidadSexo->setNombre('Hombre');
//            $manager->persist($arIdentidadSexo);
//        }
//        $arIdentidadSexo = $manager->getRepository('App:RecursoHumano\RhuIdentidadSexo')->find(2);
//        if (!$arIdentidadSexo) {
//            $arIdentidadSexo = new RhuIdentidadSexo();
//            $arIdentidadSexo->setCodigoIdentidadSexoPk(2);
//            $arIdentidadSexo->setNombre('Hombre');
//            $manager->persist($arIdentidadSexo);
//        }
        $manager->flush();
    }
}
