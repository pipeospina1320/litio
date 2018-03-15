<?php

namespace App\DataFixtures;

use App\Entity\IdentificacionTipo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Tests\Fixtures\Entity;

class IdentidicacionTipo extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(11);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(11);
            $arIdentificacionTipo->setNombre('Registro civil de nacimiento');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(12);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(12);
            $arIdentificacionTipo->setNombre('Tarjeta de identidad');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(13);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(13);
            $arIdentificacionTipo->setNombre('Cédula de ciudadanía');
            $manager->persist($arIdentificacionTipo);
        }
//        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(14);
//        if (!$arIdentificacionTipo) {
//            $arIdentificacionTipo = new IdentificacionTipo();
//            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(14);
//            $arIdentificacionTipo->setNombre('Certificado de la Registraduría para sucesiones ilíquidas de personas naturales que no tienen ningún documento de identificación');
//            $manager->persist($arIdentificacionTipo);
//        }
//        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(15);
//        if (!$arIdentificacionTipo) {
//            $arIdentificacionTipo = new IdentificacionTipo();
//            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(15);
//            $arIdentificacionTipo->setNombre('Tipo de documento que identifica una sucesión ilíquida, expedido por lanotaria o por un juzgado');
//            $manager->persist($arIdentificacionTipo);
//        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(21);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(21);
            $arIdentificacionTipo->setNombre('Tarjeta de extranjería');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(22);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(22);
            $arIdentificacionTipo->setNombre('Cédula de extranjería');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(31);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(31);
            $arIdentificacionTipo->setNombre('Nit');
            $manager->persist($arIdentificacionTipo);
        }
//        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(33);
//        if (!$arIdentificacionTipo) {
//            $arIdentificacionTipo = new IdentificacionTipo();
//            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(33);
//            $arIdentificacionTipo->setNombre('Identificación de extranjeros diferente al NIT asignado DIAN');
//            $manager->persist($arIdentificacionTipo);
//        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(41);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(41);
            $arIdentificacionTipo->setNombre('Pasaporte');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(42);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(42);
            $arIdentificacionTipo->setNombre('Documento de identificación extranjero');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(43);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(43);
            $arIdentificacionTipo->setNombre('Sin identificación del exterior o para uso definido por la DIAN');
            $manager->persist($arIdentificacionTipo);
        }
        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(44);
        if (!$arIdentificacionTipo) {
            $arIdentificacionTipo = new IdentificacionTipo();
            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(44);
            $arIdentificacionTipo->setNombre('Documento de Identificación extranjero Persona Jurídica');
            $manager->persist($arIdentificacionTipo);
        }
//        $arIdentificacionTipo = $manager->getRepository('App:IdentificacionTipo')->find(46);
//        if (!$arIdentificacionTipo) {
//            $arIdentificacionTipo = new IdentificacionTipo();
//            $arIdentificacionTipo->setCodigoIdentificacionTipoPk(46);
//            $arIdentificacionTipo->setNombre('Carné Diplomático: Documento expedido por el Ministerio de Relaciones Exteriores a los miembros de la misiones diplomáticas y consulares, con el que se deben identificar ente las autoridades nacionales');
//            $manager->persist($arIdentificacionTipo);
//        }
        $manager->flush();
    }
}
