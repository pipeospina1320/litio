<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SalarioTipo extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arSalarioTipo = $manager->getRepository('App:SalarioTipo')->find(1);
        if (!$arSalarioTipo) {
            $arSalarioTipo = new \App\Entity\SalarioTipo();
            $arSalarioTipo->setCodigoSalarioTipoPk(1);
            $arSalarioTipo->setNombre('Salario fijo');
            $manager->persist($arSalarioTipo);
        }
        $arSalarioTipo = $manager->getRepository('App:SalarioTipo')->find(2);
        if (!$arSalarioTipo) {
            $arSalarioTipo = new \App\Entity\SalarioTipo();
            $arSalarioTipo->setCodigoSalarioTipoPk(2);
            $arSalarioTipo->setNombre('Salario variable');
            $manager->persist($arSalarioTipo);
        }
        $manager->flush();
    }
}
