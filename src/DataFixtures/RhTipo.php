<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RhTipo extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(1);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(1);
            $arRhTipo->setNombre('O -');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(2);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(2);
            $arRhTipo->setNombre('O +');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(3);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(3);
            $arRhTipo->setNombre('A -');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(4);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(4);
            $arRhTipo->setNombre('A +');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(5);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(5);
            $arRhTipo->setNombre('B -');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(6);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(6);
            $arRhTipo->setNombre('B +');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(7);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(7);
            $arRhTipo->setNombre('AB -');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(8);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(8);
            $arRhTipo->setNombre('AB +');
            $manager->persist($arRhTipo);
        }
        $arRhTipo = $manager->getRepository('App:RhTipo')->find(9);
        if(!$arRhTipo){
            $arRhTipo = new \App\Entity\RhTipo;
            $arRhTipo->setCodigoRhTipoPk(9);
            $arRhTipo->setNombre('Sin definir');
            $manager->persist($arRhTipo);
        }
        $manager->flush();
    }
}
