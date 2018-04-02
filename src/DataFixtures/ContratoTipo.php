<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContratoTipo extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arContratoTipo = $manager->getRepository('App:ContratoTipo')->find(1);
        if (!$arContratoTipo) {
            $arContratoTipo = new \App\Entity\ContratoTipo();
            $arContratoTipo->setCodigoContratoTipoPk(1);
            $arContratoTipo->setNombre('Contrato a término fijo');
            $manager->persist($arContratoTipo);
        }
        $arContratoTipo = $manager->getRepository('App:ContratoTipo')->find(2);
        if (!$arContratoTipo) {
            $arContratoTipo = new \App\Entity\ContratoTipo();
            $arContratoTipo->setCodigoContratoTipoPk(2);
            $arContratoTipo->setNombre('Contrato a Término Indefinido');
            $manager->persist($arContratoTipo);
        }
        $arContratoTipo = $manager->getRepository('App:ContratoTipo')->find(3);
        if (!$arContratoTipo) {
            $arContratoTipo = new \App\Entity\ContratoTipo();
            $arContratoTipo->setCodigoContratoTipoPk(3);
            $arContratoTipo->setNombre('Contrato de Obra o labor');
            $manager->persist($arContratoTipo);
        }
        $arContratoTipo = $manager->getRepository('App:ContratoTipo')->find(4);
        if (!$arContratoTipo) {
            $arContratoTipo = new \App\Entity\ContratoTipo();
            $arContratoTipo->setCodigoContratoTipoPk(4);
            $arContratoTipo->setNombre('Contrato de aprendizaje');
            $manager->persist($arContratoTipo);
        }
        $manager->flush();
    }
}
