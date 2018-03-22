<?php

namespace App\DataFixtures;

use App\Entity\Ciudad;
use App\Entity\Departamento;
use App\Entity\Pais;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class OrganizacionTerritorial extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '013'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('013');
            $arPais->setNombre('AFGANISTAN');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '023'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('023');
            $arPais->setNombre('ALEMANIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '053'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('053');
            $arPais->setNombre('ARABIA SAUDITA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '063'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('063');
            $arPais->setNombre('ARGENTINA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '069'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('069');
            $arPais->setNombre('AUSTRALIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '087'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('087');
            $arPais->setNombre('BELGICA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '097'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('097');
            $arPais->setNombre('BOLIVIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '105'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('105');
            $arPais->setNombre('BRASIL');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '111'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('111');
            $arPais->setNombre('BULGARIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '141'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('141');
            $arPais->setNombre('CAMBOYA (KAMPUCHEA)');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '145'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('145');
            $arPais->setNombre('CAMERUN, REPUBLICA UNIDA DEL');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '149'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('149');
            $arPais->setNombre('CANADA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '169'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('169');
            $arPais->setNombre('COLOMBIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '187'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('187');
            $arPais->setNombre('COREA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '196'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('196');
            $arPais->setNombre('COSTA RICA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '199'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('199');
            $arPais->setNombre('CUBA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '211'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('211');
            $arPais->setNombre('CHILE');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '215'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('215');
            $arPais->setNombre('CHINA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '218'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('218');
            $arPais->setNombre('TAIWAN');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '232'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('232');
            $arPais->setNombre('DINAMARCA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '239'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('239');
            $arPais->setNombre('ECUADOR');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '240'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('240');
            $arPais->setNombre('EGIPTO');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '242'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('242');
            $arPais->setNombre('EL SALVADOR');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '245'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('245');
            $arPais->setNombre('ESPAÑA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '249'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('249');
            $arPais->setNombre('ESTADOS UNIDOS');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '251'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('251');
            $arPais->setNombre('ESTONIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '253'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('253');
            $arPais->setNombre('ETIOPIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '267'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('267');
            $arPais->setNombre('FILIPINAS');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '271'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('271');
            $arPais->setNombre('FINLANDIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '275'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('275');
            $arPais->setNombre('FRANCIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '301'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('301');
            $arPais->setNombre('GRECIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '317'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('317');
            $arPais->setNombre('GUATEMALA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '341'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('341');
            $arPais->setNombre('HAITI');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '345'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('345');
            $arPais->setNombre('HONDURAS');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '365'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('365');
            $arPais->setNombre('INDONESIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '369'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('369');
            $arPais->setNombre('IRAK');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '372'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('372');
            $arPais->setNombre('IRAN');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '375'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('375');
            $arPais->setNombre('IRLANDA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '383'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('383');
            $arPais->setNombre('ISRAEL');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '386'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('386');
            $arPais->setNombre('ITALIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '399'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('399');
            $arPais->setNombre('JAPON');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '403'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('403');
            $arPais->setNombre('JORDANIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '420'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('420');
            $arPais->setNombre('LAOS');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '429'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('429');
            $arPais->setNombre('LETONIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '443'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('443');
            $arPais->setNombre('LITUANIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '455'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('455');
            $arPais->setNombre('MALASIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '474'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('474');
            $arPais->setNombre('MARRUECOS');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '493'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('493');
            $arPais->setNombre('MEXICO');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '521'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('521');
            $arPais->setNombre('NICARAGUA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '538'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('538');
            $arPais->setNombre('NORUEGA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '548'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('548');
            $arPais->setNombre('NUEVA ZELANDIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '580'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('580');
            $arPais->setNombre('PANAMA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '586'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('586');
            $arPais->setNombre('PARAGUAY');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '589'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('589');
            $arPais->setNombre('PERU');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '603'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('603');
            $arPais->setNombre('POLONIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '607'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('607');
            $arPais->setNombre('PORTUGAL');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '611'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('611');
            $arPais->setNombre('PUERTO RICO');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '647'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('647');
            $arPais->setNombre('REPUBLICA DOMINICANA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '670'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('670');
            $arPais->setNombre('RUMANIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '676'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('676');
            $arPais->setNombre('RUSIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '764'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('764');
            $arPais->setNombre('SUECIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '767'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('767');
            $arPais->setNombre('SUIZA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '776'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('776');
            $arPais->setNombre('TAILANDIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '827'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('827');
            $arPais->setNombre('TURQUIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '830'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('830');
            $arPais->setNombre('UCRANIA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '845'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('845');
            $arPais->setNombre('URUGUAY');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '850'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('850');
            $arPais->setNombre('VENEZUELA');
            $manager->persist($arPais);
        }
        $arPais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '855'));
        if (!$arPais) {
            $arPais = new Pais();
            $arPais->setCodigoPaisEstandar('855');
            $arPais->setNombre('VIET NAM');
            $manager->persist($arPais);
        }
        $manager->flush();

//        Departamento
        $pais = $manager->getRepository('App:Pais')->findOneBy(array('codigoPaisEstandar' => '169'));
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('ANTIOQUIA');
            $arDepartamento->setCodigoDane('05');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('ATLANTICO');
            $arDepartamento->setCodigoDane('08');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '11'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('BOGOTA');
            $arDepartamento->setCodigoDane('11');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('BOLIVAR');
            $arDepartamento->setCodigoDane('13');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('BOYACA');
            $arDepartamento->setCodigoDane('15');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CALDAS');
            $arDepartamento->setCodigoDane('17');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CAQUETA');
            $arDepartamento->setCodigoDane('18');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CAUCA');
            $arDepartamento->setCodigoDane('19');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CESAR');
            $arDepartamento->setCodigoDane('20');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CORDOBA');
            $arDepartamento->setCodigoDane('23');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CUNDINAMARCA');
            $arDepartamento->setCodigoDane('25');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CHOCO');
            $arDepartamento->setCodigoDane('27');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('HUILA');
            $arDepartamento->setCodigoDane('41');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('LA GUAJIRA');
            $arDepartamento->setCodigoDane('44');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('MAGDALENA');
            $arDepartamento->setCodigoDane('47');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('META');
            $arDepartamento->setCodigoDane('50');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('NARIÑO');
            $arDepartamento->setCodigoDane('52');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('N. DE SANTANDER');
            $arDepartamento->setCodigoDane('54');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('QUINDIO');
            $arDepartamento->setCodigoDane('63');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('RISARALDA');
            $arDepartamento->setCodigoDane('66');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('SANTANDER');
            $arDepartamento->setCodigoDane('68');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('SUCRE');
            $arDepartamento->setCodigoDane('70');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('TOLIMA');
            $arDepartamento->setCodigoDane('73');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('VALLE DEL CAUCA');
            $arDepartamento->setCodigoDane('76');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('ARAUCA');
            $arDepartamento->setCodigoDane('81');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('CASANARE');
            $arDepartamento->setCodigoDane('85');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('PUTUMAYO');
            $arDepartamento->setCodigoDane('86');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '88'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('SAN ANDRES');
            $arDepartamento->setCodigoDane('88');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('AMAZONAS');
            $arDepartamento->setCodigoDane('91');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('GUAINIA');
            $arDepartamento->setCodigoDane('94');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '95'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('GUAVIARE');
            $arDepartamento->setCodigoDane('95');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('VAUPES');
            $arDepartamento->setCodigoDane('97');
            $manager->persist($arDepartamento);
        }
        $arDepartamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '99'));
        if (!$arDepartamento) {
            $arDepartamento = new Departamento();
            $arDepartamento->setPaisRel($pais);
            $arDepartamento->setNombre('VICHADA');
            $arDepartamento->setCodigoDane('99');
            $manager->persist($arDepartamento);
        }

        $manager->flush();

        //Ciudad

        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MEDELLIN');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '002'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ABEJORRAL');
            $arCiudad->setCodigoMunicipioDane('002');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '004'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ABRIAQUI');
            $arCiudad->setCodigoMunicipioDane('004');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '021'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALEJANDRIA');
            $arCiudad->setCodigoMunicipioDane('021');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '030'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AMAGA');
            $arCiudad->setCodigoMunicipioDane('030');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '031'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AMALFI');
            $arCiudad->setCodigoMunicipioDane('031');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '034'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANDES');
            $arCiudad->setCodigoMunicipioDane('034');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '036'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANGELOPOLIS');
            $arCiudad->setCodigoMunicipioDane('036');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '038'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANGOSTURA');
            $arCiudad->setCodigoMunicipioDane('038');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '040'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANORI');
            $arCiudad->setCodigoMunicipioDane('040');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '042'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTAFE DE ANTIOQUIA');
            $arCiudad->setCodigoMunicipioDane('042');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '044'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANZA');
            $arCiudad->setCodigoMunicipioDane('044');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '045'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('APARTADO');
            $arCiudad->setCodigoMunicipioDane('045');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '051'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARBOLETES');
            $arCiudad->setCodigoMunicipioDane('051');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '055'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARGELIA');
            $arCiudad->setCodigoMunicipioDane('055');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '059'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARMENIA');
            $arCiudad->setCodigoMunicipioDane('059');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '079'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARBOSA');
            $arCiudad->setCodigoMunicipioDane('079');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '086'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELMIRA');
            $arCiudad->setCodigoMunicipioDane('086');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '088'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELLO');
            $arCiudad->setCodigoMunicipioDane('088');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '091'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BETANIA');
            $arCiudad->setCodigoMunicipioDane('091');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '093'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BETULIA');
            $arCiudad->setCodigoMunicipioDane('093');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '101'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIUDAD BOLIVAR');
            $arCiudad->setCodigoMunicipioDane('101');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '107'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BRICEÑO');
            $arCiudad->setCodigoMunicipioDane('107');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '113'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BURITICA');
            $arCiudad->setCodigoMunicipioDane('113');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '120'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CACERES');
            $arCiudad->setCodigoMunicipioDane('120');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '125'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAICEDO');
            $arCiudad->setCodigoMunicipioDane('125');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '129'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALDAS');
            $arCiudad->setCodigoMunicipioDane('129');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '134'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAMPAMENTO');
            $arCiudad->setCodigoMunicipioDane('134');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '138'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAÑASGORDAS');
            $arCiudad->setCodigoMunicipioDane('138');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '142'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARACOLI');
            $arCiudad->setCodigoMunicipioDane('142');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '145'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARAMANTA');
            $arCiudad->setCodigoMunicipioDane('145');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '147'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAREPA');
            $arCiudad->setCodigoMunicipioDane('147');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '148'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CARMEN DE VIBORAL');
            $arCiudad->setCodigoMunicipioDane('148');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '150'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAROLINA');
            $arCiudad->setCodigoMunicipioDane('150');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '154'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAUCASIA');
            $arCiudad->setCodigoMunicipioDane('154');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '172'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIGORODO');
            $arCiudad->setCodigoMunicipioDane('172');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '190'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CISNEROS');
            $arCiudad->setCodigoMunicipioDane('190');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '197'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COCORNA');
            $arCiudad->setCodigoMunicipioDane('197');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '206'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONCEPCION');
            $arCiudad->setCodigoMunicipioDane('206');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '209'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONCORDIA');
            $arCiudad->setCodigoMunicipioDane('209');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '212'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COPACABANA');
            $arCiudad->setCodigoMunicipioDane('212');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '234'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DABEIBA');
            $arCiudad->setCodigoMunicipioDane('234');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '237'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DON MATIAS');
            $arCiudad->setCodigoMunicipioDane('237');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '240'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EBEJICO');
            $arCiudad->setCodigoMunicipioDane('240');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL BAGRE');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '264'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ENTRERRIOS');
            $arCiudad->setCodigoMunicipioDane('264');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '266'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ENVIGADO');
            $arCiudad->setCodigoMunicipioDane('266');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '282'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FREDONIA');
            $arCiudad->setCodigoMunicipioDane('282');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '284'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FRONTINO');
            $arCiudad->setCodigoMunicipioDane('284');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '306'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GIRALDO');
            $arCiudad->setCodigoMunicipioDane('306');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '308'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GIRARDOTA');
            $arCiudad->setCodigoMunicipioDane('308');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '310'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GOMEZ PLATA');
            $arCiudad->setCodigoMunicipioDane('310');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '313'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GRANADA');
            $arCiudad->setCodigoMunicipioDane('313');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '315'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUADALUPE');
            $arCiudad->setCodigoMunicipioDane('315');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUARNE');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '321'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUATAPE');
            $arCiudad->setCodigoMunicipioDane('321');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '347'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HELICONIA');
            $arCiudad->setCodigoMunicipioDane('347');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '353'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HISPANIA');
            $arCiudad->setCodigoMunicipioDane('353');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '360'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ITAGUI');
            $arCiudad->setCodigoMunicipioDane('360');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '361'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ITUANGO');
            $arCiudad->setCodigoMunicipioDane('361');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '364'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JARDIN');
            $arCiudad->setCodigoMunicipioDane('364');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '368'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JERICO');
            $arCiudad->setCodigoMunicipioDane('368');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '376'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CEJA');
            $arCiudad->setCodigoMunicipioDane('376');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '380'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA ESTRELLA');
            $arCiudad->setCodigoMunicipioDane('380');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '390'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PINTADA');
            $arCiudad->setCodigoMunicipioDane('390');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA UNION');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '411'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LIBORINA');
            $arCiudad->setCodigoMunicipioDane('411');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '425'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MACEO');
            $arCiudad->setCodigoMunicipioDane('425');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '440'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARINILLA');
            $arCiudad->setCodigoMunicipioDane('440');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '467'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTEBELLO');
            $arCiudad->setCodigoMunicipioDane('467');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '475'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MURINDO');
            $arCiudad->setCodigoMunicipioDane('475');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '480'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MUTATA');
            $arCiudad->setCodigoMunicipioDane('480');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '483'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NARIÑO');
            $arCiudad->setCodigoMunicipioDane('483');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '490'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NECOCLI');
            $arCiudad->setCodigoMunicipioDane('490');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '495'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NECHI');
            $arCiudad->setCodigoMunicipioDane('495');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '501'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OLAYA');
            $arCiudad->setCodigoMunicipioDane('501');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '541'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PEÐOL');
            $arCiudad->setCodigoMunicipioDane('541');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '543'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PEQUE');
            $arCiudad->setCodigoMunicipioDane('543');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '576'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUEBLORRICO');
            $arCiudad->setCodigoMunicipioDane('576');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '579'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO BERRIO');
            $arCiudad->setCodigoMunicipioDane('579');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '585'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO NARE');
            $arCiudad->setCodigoMunicipioDane('585');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '591'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO TRIUNFO');
            $arCiudad->setCodigoMunicipioDane('591');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '604'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('REMEDIOS');
            $arCiudad->setCodigoMunicipioDane('604');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '607'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RETIRO');
            $arCiudad->setCodigoMunicipioDane('607');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '615'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIONEGRO');
            $arCiudad->setCodigoMunicipioDane('615');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '628'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANALARGA');
            $arCiudad->setCodigoMunicipioDane('628');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '631'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANETA');
            $arCiudad->setCodigoMunicipioDane('631');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '642'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALGAR');
            $arCiudad->setCodigoMunicipioDane('642');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '647'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANDRES DE CUERQUIA');
            $arCiudad->setCodigoMunicipioDane('647');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '649'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CARLOS');
            $arCiudad->setCodigoMunicipioDane('649');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '652'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN FRANCISCO');
            $arCiudad->setCodigoMunicipioDane('652');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '656'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JERONIMO');
            $arCiudad->setCodigoMunicipioDane('656');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '658'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DE LA MONTAÑA');
            $arCiudad->setCodigoMunicipioDane('658');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '659'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN DE URABA');
            $arCiudad->setCodigoMunicipioDane('659');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LUIS');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '664'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PEDRO');
            $arCiudad->setCodigoMunicipioDane('664');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '665'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PEDRO DE URABA');
            $arCiudad->setCodigoMunicipioDane('665');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '667'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN RAFAEL');
            $arCiudad->setCodigoMunicipioDane('667');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ROQUE');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '674'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN VICENTE');
            $arCiudad->setCodigoMunicipioDane('674');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '679'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA BARBARA');
            $arCiudad->setCodigoMunicipioDane('679');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA DE OSOS');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '690'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTO DOMINGO');
            $arCiudad->setCodigoMunicipioDane('690');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '697'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL SANTUARIO');
            $arCiudad->setCodigoMunicipioDane('697');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '736'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SEGOVIA');
            $arCiudad->setCodigoMunicipioDane('736');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '756'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SONSON');
            $arCiudad->setCodigoMunicipioDane('756');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '761'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOPETRAN');
            $arCiudad->setCodigoMunicipioDane('761');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '789'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAMESIS');
            $arCiudad->setCodigoMunicipioDane('789');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '790'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TARAZA');
            $arCiudad->setCodigoMunicipioDane('790');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '792'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TARSO');
            $arCiudad->setCodigoMunicipioDane('792');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '809'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TITIRIBI');
            $arCiudad->setCodigoMunicipioDane('809');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '819'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOLEDO');
            $arCiudad->setCodigoMunicipioDane('819');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '837'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TURBO');
            $arCiudad->setCodigoMunicipioDane('837');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '842'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('URAMITA');
            $arCiudad->setCodigoMunicipioDane('842');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '847'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('URRAO');
            $arCiudad->setCodigoMunicipioDane('847');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '854'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALDIVIA');
            $arCiudad->setCodigoMunicipioDane('854');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '856'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALPARAISO');
            $arCiudad->setCodigoMunicipioDane('856');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '858'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VEGACHI');
            $arCiudad->setCodigoMunicipioDane('858');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '861'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VENECIA');
            $arCiudad->setCodigoMunicipioDane('861');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '873'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VIGIA DEL FUERTE');
            $arCiudad->setCodigoMunicipioDane('873');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YALI');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '887'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YARUMAL');
            $arCiudad->setCodigoMunicipioDane('887');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '890'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YOLOMBO');
            $arCiudad->setCodigoMunicipioDane('890');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '893'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YONDO');
            $arCiudad->setCodigoMunicipioDane('893');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '895'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '05'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZARAGOZA');
            $arCiudad->setCodigoMunicipioDane('895');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANQUILLA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '078'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARANOA');
            $arCiudad->setCodigoMunicipioDane('078');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '137'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAMPO DE LA CRUZ');
            $arCiudad->setCodigoMunicipioDane('137');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '141'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CANDELARIA');
            $arCiudad->setCodigoMunicipioDane('141');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '296'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GALAPA');
            $arCiudad->setCodigoMunicipioDane('296');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '372'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JUAN DE ACOSTA');
            $arCiudad->setCodigoMunicipioDane('372');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '421'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LURUACO');
            $arCiudad->setCodigoMunicipioDane('421');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '433'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MALAMBO');
            $arCiudad->setCodigoMunicipioDane('433');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '436'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANATI');
            $arCiudad->setCodigoMunicipioDane('436');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '520'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALMAR DE VARELA');
            $arCiudad->setCodigoMunicipioDane('520');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '549'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIOJO');
            $arCiudad->setCodigoMunicipioDane('549');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '558'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('POLONUEVO');
            $arCiudad->setCodigoMunicipioDane('558');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '560'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PONEDERA');
            $arCiudad->setCodigoMunicipioDane('560');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO COLOMBIA');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '606'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('REPELON');
            $arCiudad->setCodigoMunicipioDane('606');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '634'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANAGRANDE');
            $arCiudad->setCodigoMunicipioDane('634');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '638'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANALARGA');
            $arCiudad->setCodigoMunicipioDane('638');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '675'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA LUCIA');
            $arCiudad->setCodigoMunicipioDane('675');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '685'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTO TOMAS');
            $arCiudad->setCodigoMunicipioDane('685');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '758'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOLEDAD');
            $arCiudad->setCodigoMunicipioDane('758');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '770'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUAN');
            $arCiudad->setCodigoMunicipioDane('770');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '832'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUBARA');
            $arCiudad->setCodigoMunicipioDane('832');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '849'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '08'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('USIACURI');
            $arCiudad->setCodigoMunicipioDane('849');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '11'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOGOTA, D.C.');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARTAGENA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '006'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ACHI');
            $arCiudad->setCodigoMunicipioDane('006');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '030'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALTOS DEL ROSARIO');
            $arCiudad->setCodigoMunicipioDane('030');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '042'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARENAL');
            $arCiudad->setCodigoMunicipioDane('042');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '052'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARJONA');
            $arCiudad->setCodigoMunicipioDane('052');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '062'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARROYOHONDO');
            $arCiudad->setCodigoMunicipioDane('062');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '074'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANCO DE LOBA');
            $arCiudad->setCodigoMunicipioDane('074');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '140'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALAMAR');
            $arCiudad->setCodigoMunicipioDane('140');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '160'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CANTAGALLO');
            $arCiudad->setCodigoMunicipioDane('160');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '188'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CICUCO');
            $arCiudad->setCodigoMunicipioDane('188');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '212'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CORDOBA');
            $arCiudad->setCodigoMunicipioDane('212');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '222'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CLEMENCIA');
            $arCiudad->setCodigoMunicipioDane('222');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '244'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CARMEN DE BOLIVAR');
            $arCiudad->setCodigoMunicipioDane('244');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '248'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL GUAMO');
            $arCiudad->setCodigoMunicipioDane('248');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '268'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PEÑON');
            $arCiudad->setCodigoMunicipioDane('268');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '300'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HATILLO DE LOBA');
            $arCiudad->setCodigoMunicipioDane('300');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAGANGUE');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '433'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAHATES');
            $arCiudad->setCodigoMunicipioDane('433');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '440'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARGARITA');
            $arCiudad->setCodigoMunicipioDane('440');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '442'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARIA LA BAJA');
            $arCiudad->setCodigoMunicipioDane('442');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '458'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTECRISTO');
            $arCiudad->setCodigoMunicipioDane('458');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '468'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOMPOS');
            $arCiudad->setCodigoMunicipioDane('468');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '490'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NOROSI');
            $arCiudad->setCodigoMunicipioDane('490');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '473'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MORALES');
            $arCiudad->setCodigoMunicipioDane('473');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '549'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PINILLOS');
            $arCiudad->setCodigoMunicipioDane('549');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '580'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('REGIDOR');
            $arCiudad->setCodigoMunicipioDane('580');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '600'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIO VIEJO');
            $arCiudad->setCodigoMunicipioDane('600');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '620'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CRISTOBAL');
            $arCiudad->setCodigoMunicipioDane('620');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '647'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ESTANISLAO');
            $arCiudad->setCodigoMunicipioDane('647');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '650'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN FERNANDO');
            $arCiudad->setCodigoMunicipioDane('650');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '654'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JACINTO');
            $arCiudad->setCodigoMunicipioDane('654');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '655'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JACINTO DEL CAUCA');
            $arCiudad->setCodigoMunicipioDane('655');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '657'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN NEPOMUCENO');
            $arCiudad->setCodigoMunicipioDane('657');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '667'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MARTIN DE LOBA');
            $arCiudad->setCodigoMunicipioDane('667');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PABLO');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '673'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA CATALINA');
            $arCiudad->setCodigoMunicipioDane('673');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '683'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA');
            $arCiudad->setCodigoMunicipioDane('683');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '688'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA DEL SUR');
            $arCiudad->setCodigoMunicipioDane('688');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '744'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIMITI');
            $arCiudad->setCodigoMunicipioDane('744');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '760'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOPLAVIENTO');
            $arCiudad->setCodigoMunicipioDane('760');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '780'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TALAIGUA NUEVO');
            $arCiudad->setCodigoMunicipioDane('780');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '810'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIQUISIO');
            $arCiudad->setCodigoMunicipioDane('810');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '836'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TURBACO');
            $arCiudad->setCodigoMunicipioDane('836');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '838'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TURBANA');
            $arCiudad->setCodigoMunicipioDane('838');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '873'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLANUEVA');
            $arCiudad->setCodigoMunicipioDane('873');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '894'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '13'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZAMBRANO');
            $arCiudad->setCodigoMunicipioDane('894');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUNJA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '022'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALMEIDA');
            $arCiudad->setCodigoMunicipioDane('022');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '047'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AQUITANIA');
            $arCiudad->setCodigoMunicipioDane('047');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '051'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARCABUCO');
            $arCiudad->setCodigoMunicipioDane('051');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '087'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELEN');
            $arCiudad->setCodigoMunicipioDane('087');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '090'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BERBEO');
            $arCiudad->setCodigoMunicipioDane('090');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '092'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BETEITIVA');
            $arCiudad->setCodigoMunicipioDane('092');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '097'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOAVITA');
            $arCiudad->setCodigoMunicipioDane('097');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '104'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOYACA');
            $arCiudad->setCodigoMunicipioDane('104');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '106'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BRICEÑO');
            $arCiudad->setCodigoMunicipioDane('106');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '109'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENAVISTA');
            $arCiudad->setCodigoMunicipioDane('109');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '114'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUSBANZA');
            $arCiudad->setCodigoMunicipioDane('114');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '131'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALDAS');
            $arCiudad->setCodigoMunicipioDane('131');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '135'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAMPOHERMOSO');
            $arCiudad->setCodigoMunicipioDane('135');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '162'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CERINZA');
            $arCiudad->setCodigoMunicipioDane('162');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '172'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHINAVITA');
            $arCiudad->setCodigoMunicipioDane('172');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '176'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIQUINQUIRA');
            $arCiudad->setCodigoMunicipioDane('176');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '180'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHISCAS');
            $arCiudad->setCodigoMunicipioDane('180');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '183'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHITA');
            $arCiudad->setCodigoMunicipioDane('183');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '185'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHITARAQUE');
            $arCiudad->setCodigoMunicipioDane('185');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '187'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIVATA');
            $arCiudad->setCodigoMunicipioDane('187');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '189'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIENEGA');
            $arCiudad->setCodigoMunicipioDane('189');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '204'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COMBITA');
            $arCiudad->setCodigoMunicipioDane('204');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '212'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COPER');
            $arCiudad->setCodigoMunicipioDane('212');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '215'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CORRALES');
            $arCiudad->setCodigoMunicipioDane('215');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '218'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COVARACHIA');
            $arCiudad->setCodigoMunicipioDane('218');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '223'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUBARA');
            $arCiudad->setCodigoMunicipioDane('223');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '224'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUCAITA');
            $arCiudad->setCodigoMunicipioDane('224');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '226'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUITIVA');
            $arCiudad->setCodigoMunicipioDane('226');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '232'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIQUIZA');
            $arCiudad->setCodigoMunicipioDane('232');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '236'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIVOR');
            $arCiudad->setCodigoMunicipioDane('236');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '238'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DUITAMA');
            $arCiudad->setCodigoMunicipioDane('238');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '244'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL COCUY');
            $arCiudad->setCodigoMunicipioDane('244');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '248'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ESPINO');
            $arCiudad->setCodigoMunicipioDane('248');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '272'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FIRAVITOBA');
            $arCiudad->setCodigoMunicipioDane('272');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '276'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORESTA');
            $arCiudad->setCodigoMunicipioDane('276');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '293'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GACHANTIVA');
            $arCiudad->setCodigoMunicipioDane('293');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '296'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GAMEZA');
            $arCiudad->setCodigoMunicipioDane('296');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '299'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GARAGOA');
            $arCiudad->setCodigoMunicipioDane('299');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '317'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACAMAYAS');
            $arCiudad->setCodigoMunicipioDane('317');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '322'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUATEQUE');
            $arCiudad->setCodigoMunicipioDane('322');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '325'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAYATA');
            $arCiudad->setCodigoMunicipioDane('325');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '332'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GsICAN');
            $arCiudad->setCodigoMunicipioDane('332');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '362'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('IZA');
            $arCiudad->setCodigoMunicipioDane('362');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '367'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JENESANO');
            $arCiudad->setCodigoMunicipioDane('367');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '368'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JERICO');
            $arCiudad->setCodigoMunicipioDane('368');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '377'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LABRANZAGRANDE');
            $arCiudad->setCodigoMunicipioDane('377');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '380'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CAPILLA');
            $arCiudad->setCodigoMunicipioDane('380');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '401'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VICTORIA');
            $arCiudad->setCodigoMunicipioDane('401');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '403'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA UVITA');
            $arCiudad->setCodigoMunicipioDane('403');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '407'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLA DE LEYVA');
            $arCiudad->setCodigoMunicipioDane('407');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '425'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MACANAL');
            $arCiudad->setCodigoMunicipioDane('425');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '442'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARIPI');
            $arCiudad->setCodigoMunicipioDane('442');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '455'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MIRAFLORES');
            $arCiudad->setCodigoMunicipioDane('455');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '464'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONGUA');
            $arCiudad->setCodigoMunicipioDane('464');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '466'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONGUI');
            $arCiudad->setCodigoMunicipioDane('466');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '469'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONIQUIRA');
            $arCiudad->setCodigoMunicipioDane('469');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '476'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOTAVITA');
            $arCiudad->setCodigoMunicipioDane('476');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '480'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MUZO');
            $arCiudad->setCodigoMunicipioDane('480');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '491'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NOBSA');
            $arCiudad->setCodigoMunicipioDane('491');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '494'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NUEVO COLON');
            $arCiudad->setCodigoMunicipioDane('494');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '500'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OICATA');
            $arCiudad->setCodigoMunicipioDane('500');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '507'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OTANCHE');
            $arCiudad->setCodigoMunicipioDane('507');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '511'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PACHAVITA');
            $arCiudad->setCodigoMunicipioDane('511');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '514'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAEZ');
            $arCiudad->setCodigoMunicipioDane('514');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '516'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAIPA');
            $arCiudad->setCodigoMunicipioDane('516');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '518'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAJARITO');
            $arCiudad->setCodigoMunicipioDane('518');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '522'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PANQUEBA');
            $arCiudad->setCodigoMunicipioDane('522');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '531'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAUNA');
            $arCiudad->setCodigoMunicipioDane('531');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '533'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAYA');
            $arCiudad->setCodigoMunicipioDane('533');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '537'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAZ DE RIO');
            $arCiudad->setCodigoMunicipioDane('537');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '542'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PESCA');
            $arCiudad->setCodigoMunicipioDane('542');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '550'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PISBA');
            $arCiudad->setCodigoMunicipioDane('550');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '572'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO BOYACA');
            $arCiudad->setCodigoMunicipioDane('572');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '580'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUIPAMA');
            $arCiudad->setCodigoMunicipioDane('580');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '599'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RAMIRIQUI');
            $arCiudad->setCodigoMunicipioDane('599');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '600'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RAQUIRA');
            $arCiudad->setCodigoMunicipioDane('600');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '621'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RONDON');
            $arCiudad->setCodigoMunicipioDane('621');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '632'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABOYA');
            $arCiudad->setCodigoMunicipioDane('632');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '638'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SACHICA');
            $arCiudad->setCodigoMunicipioDane('638');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '646'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAMACA');
            $arCiudad->setCodigoMunicipioDane('646');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN EDUARDO');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '664'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DE PARE');
            $arCiudad->setCodigoMunicipioDane('664');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '667'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LUIS DE GACENO');
            $arCiudad->setCodigoMunicipioDane('667');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '673'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MATEO');
            $arCiudad->setCodigoMunicipioDane('673');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '676'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MIGUEL DE SEMA');
            $arCiudad->setCodigoMunicipioDane('676');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '681'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PABLO DE BORBUR');
            $arCiudad->setCodigoMunicipioDane('681');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTANA');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '690'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA MARIA');
            $arCiudad->setCodigoMunicipioDane('690');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '693'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA DE VITERBO');
            $arCiudad->setCodigoMunicipioDane('693');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '696'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA SOFIA');
            $arCiudad->setCodigoMunicipioDane('696');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '720'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SATIVANORTE');
            $arCiudad->setCodigoMunicipioDane('720');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '723'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SATIVASUR');
            $arCiudad->setCodigoMunicipioDane('723');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '740'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIACHOQUE');
            $arCiudad->setCodigoMunicipioDane('740');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '753'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOATA');
            $arCiudad->setCodigoMunicipioDane('753');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '755'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOCOTA');
            $arCiudad->setCodigoMunicipioDane('755');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '757'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOCHA');
            $arCiudad->setCodigoMunicipioDane('757');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '759'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOGAMOSO');
            $arCiudad->setCodigoMunicipioDane('759');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '761'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOMONDOCO');
            $arCiudad->setCodigoMunicipioDane('761');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '762'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SORA');
            $arCiudad->setCodigoMunicipioDane('762');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '763'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOTAQUIRA');
            $arCiudad->setCodigoMunicipioDane('763');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '764'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SORACA');
            $arCiudad->setCodigoMunicipioDane('764');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '774'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUSACON');
            $arCiudad->setCodigoMunicipioDane('774');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '776'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUTAMARCHAN');
            $arCiudad->setCodigoMunicipioDane('776');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '778'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUTATENZA');
            $arCiudad->setCodigoMunicipioDane('778');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '790'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TASCO');
            $arCiudad->setCodigoMunicipioDane('790');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '798'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TENZA');
            $arCiudad->setCodigoMunicipioDane('798');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '804'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIBANA');
            $arCiudad->setCodigoMunicipioDane('804');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '806'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIBASOSA');
            $arCiudad->setCodigoMunicipioDane('806');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '808'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TINJACA');
            $arCiudad->setCodigoMunicipioDane('808');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '810'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIPACOQUE');
            $arCiudad->setCodigoMunicipioDane('810');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '814'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOCA');
            $arCiudad->setCodigoMunicipioDane('814');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '816'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOGsI');
            $arCiudad->setCodigoMunicipioDane('816');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '820'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOPAGA');
            $arCiudad->setCodigoMunicipioDane('820');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '822'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOTA');
            $arCiudad->setCodigoMunicipioDane('822');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '832'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUNUNGUA');
            $arCiudad->setCodigoMunicipioDane('832');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '835'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TURMEQUE');
            $arCiudad->setCodigoMunicipioDane('835');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '837'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUTA');
            $arCiudad->setCodigoMunicipioDane('837');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '839'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUTAZA');
            $arCiudad->setCodigoMunicipioDane('839');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '842'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UMBITA');
            $arCiudad->setCodigoMunicipioDane('842');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '861'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VENTAQUEMADA');
            $arCiudad->setCodigoMunicipioDane('861');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '879'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VIRACACHA');
            $arCiudad->setCodigoMunicipioDane('879');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '897'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '15'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZETAQUIRA');
            $arCiudad->setCodigoMunicipioDane('897');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANIZALES');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '013'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUADAS');
            $arCiudad->setCodigoMunicipioDane('013');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '042'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANSERMA');
            $arCiudad->setCodigoMunicipioDane('042');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '050'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARANZAZU');
            $arCiudad->setCodigoMunicipioDane('050');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '088'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELALCAZAR');
            $arCiudad->setCodigoMunicipioDane('088');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '174'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHINCHINA');
            $arCiudad->setCodigoMunicipioDane('174');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '272'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FILADELFIA');
            $arCiudad->setCodigoMunicipioDane('272');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '380'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA DORADA');
            $arCiudad->setCodigoMunicipioDane('380');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '388'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA MERCED');
            $arCiudad->setCodigoMunicipioDane('388');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '433'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANZANARES');
            $arCiudad->setCodigoMunicipioDane('433');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '442'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARMATO');
            $arCiudad->setCodigoMunicipioDane('442');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '444'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARQUETALIA');
            $arCiudad->setCodigoMunicipioDane('444');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '446'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARULANDA');
            $arCiudad->setCodigoMunicipioDane('446');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '486'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NEIRA');
            $arCiudad->setCodigoMunicipioDane('486');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '495'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NORCASIA');
            $arCiudad->setCodigoMunicipioDane('495');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '513'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PACORA');
            $arCiudad->setCodigoMunicipioDane('513');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '524'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALESTINA');
            $arCiudad->setCodigoMunicipioDane('524');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '541'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PENSILVANIA');
            $arCiudad->setCodigoMunicipioDane('541');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '614'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIOSUCIO');
            $arCiudad->setCodigoMunicipioDane('614');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '616'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RISARALDA');
            $arCiudad->setCodigoMunicipioDane('616');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '653'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALAMINA');
            $arCiudad->setCodigoMunicipioDane('653');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '662'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAMANA');
            $arCiudad->setCodigoMunicipioDane('662');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '665'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE');
            $arCiudad->setCodigoMunicipioDane('665');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '777'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUPIA');
            $arCiudad->setCodigoMunicipioDane('777');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '867'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VICTORIA');
            $arCiudad->setCodigoMunicipioDane('867');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '873'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAMARIA');
            $arCiudad->setCodigoMunicipioDane('873');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '877'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '17'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VITERBO');
            $arCiudad->setCodigoMunicipioDane('877');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORENCIA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '029'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALBANIA');
            $arCiudad->setCodigoMunicipioDane('029');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '094'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELEN DE LOS ANDAQUIES');
            $arCiudad->setCodigoMunicipioDane('094');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '150'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARTAGENA DEL CHAIRA');
            $arCiudad->setCodigoMunicipioDane('150');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '205'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CURILLO');
            $arCiudad->setCodigoMunicipioDane('205');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '247'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL DONCELLO');
            $arCiudad->setCodigoMunicipioDane('247');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '256'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PAUJIL');
            $arCiudad->setCodigoMunicipioDane('256');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '410'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA MONTAÑITA');
            $arCiudad->setCodigoMunicipioDane('410');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '460'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MILAN');
            $arCiudad->setCodigoMunicipioDane('460');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '479'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MORELIA');
            $arCiudad->setCodigoMunicipioDane('479');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '592'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO RICO');
            $arCiudad->setCodigoMunicipioDane('592');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '610'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DEL FRAGUA');
            $arCiudad->setCodigoMunicipioDane('610');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '753'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN VICENTE DEL CAGUAN');
            $arCiudad->setCodigoMunicipioDane('753');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '756'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOLANO');
            $arCiudad->setCodigoMunicipioDane('756');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '785'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOLITA');
            $arCiudad->setCodigoMunicipioDane('785');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '860'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '18'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALPARAISO');
            $arCiudad->setCodigoMunicipioDane('860');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('POPAYAN');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '022'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALMAGUER');
            $arCiudad->setCodigoMunicipioDane('022');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '050'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARGELIA');
            $arCiudad->setCodigoMunicipioDane('050');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '075'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BALBOA');
            $arCiudad->setCodigoMunicipioDane('075');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '100'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOLIVAR');
            $arCiudad->setCodigoMunicipioDane('100');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '110'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENOS AIRES');
            $arCiudad->setCodigoMunicipioDane('110');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '130'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAJIBIO');
            $arCiudad->setCodigoMunicipioDane('130');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '137'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALDONO');
            $arCiudad->setCodigoMunicipioDane('137');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '142'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALOTO');
            $arCiudad->setCodigoMunicipioDane('142');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '212'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CORINTO');
            $arCiudad->setCodigoMunicipioDane('212');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '256'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL TAMBO');
            $arCiudad->setCodigoMunicipioDane('256');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '290'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORENCIA');
            $arCiudad->setCodigoMunicipioDane('290');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '300'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACHENE');
            $arCiudad->setCodigoMunicipioDane('300');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAPI');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '355'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('INZA');
            $arCiudad->setCodigoMunicipioDane('355');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '364'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JAMBALO');
            $arCiudad->setCodigoMunicipioDane('364');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '392'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA SIERRA');
            $arCiudad->setCodigoMunicipioDane('392');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '397'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VEGA');
            $arCiudad->setCodigoMunicipioDane('397');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '418'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOPEZ');
            $arCiudad->setCodigoMunicipioDane('418');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '450'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MERCADERES');
            $arCiudad->setCodigoMunicipioDane('450');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '455'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MIRANDA');
            $arCiudad->setCodigoMunicipioDane('455');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '473'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MORALES');
            $arCiudad->setCodigoMunicipioDane('473');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '513'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PADILLA');
            $arCiudad->setCodigoMunicipioDane('513');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '517'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAEZ');
            $arCiudad->setCodigoMunicipioDane('517');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '532'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PATIA');
            $arCiudad->setCodigoMunicipioDane('532');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '533'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIAMONTE');
            $arCiudad->setCodigoMunicipioDane('533');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '548'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIENDAMO');
            $arCiudad->setCodigoMunicipioDane('548');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO TEJADA');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '585'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PURACE');
            $arCiudad->setCodigoMunicipioDane('585');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '622'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ROSAS');
            $arCiudad->setCodigoMunicipioDane('622');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '693'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN SEBASTIAN');
            $arCiudad->setCodigoMunicipioDane('693');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '698'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTANDER DE QUILICHAO');
            $arCiudad->setCodigoMunicipioDane('698');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '701'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA');
            $arCiudad->setCodigoMunicipioDane('701');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '743'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SILVIA');
            $arCiudad->setCodigoMunicipioDane('743');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '760'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOTARA');
            $arCiudad->setCodigoMunicipioDane('760');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '780'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUAREZ');
            $arCiudad->setCodigoMunicipioDane('780');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '785'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUCRE');
            $arCiudad->setCodigoMunicipioDane('785');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '807'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIMBIO');
            $arCiudad->setCodigoMunicipioDane('807');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '809'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIMBIQUI');
            $arCiudad->setCodigoMunicipioDane('809');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '821'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TORIBIO');
            $arCiudad->setCodigoMunicipioDane('821');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '824'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOTORO');
            $arCiudad->setCodigoMunicipioDane('824');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '845'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '19'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLA RICA');
            $arCiudad->setCodigoMunicipioDane('845');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALLEDUPAR');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '011'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUACHICA');
            $arCiudad->setCodigoMunicipioDane('011');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '013'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUSTIN CODAZZI');
            $arCiudad->setCodigoMunicipioDane('013');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '032'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ASTREA');
            $arCiudad->setCodigoMunicipioDane('032');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '045'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BECERRIL');
            $arCiudad->setCodigoMunicipioDane('045');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '060'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOSCONIA');
            $arCiudad->setCodigoMunicipioDane('060');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '175'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIMICHAGUA');
            $arCiudad->setCodigoMunicipioDane('175');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '178'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIRIGUANA');
            $arCiudad->setCodigoMunicipioDane('178');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '228'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CURUMANI');
            $arCiudad->setCodigoMunicipioDane('228');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '238'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL COPEY');
            $arCiudad->setCodigoMunicipioDane('238');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PASO');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '295'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GAMARRA');
            $arCiudad->setCodigoMunicipioDane('295');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '310'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GONZALEZ');
            $arCiudad->setCodigoMunicipioDane('310');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '383'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA GLORIA');
            $arCiudad->setCodigoMunicipioDane('383');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA JAGUA DE IBIRICO');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '443'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANAURE');
            $arCiudad->setCodigoMunicipioDane('443');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '517'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAILITAS');
            $arCiudad->setCodigoMunicipioDane('517');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '550'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PELAYA');
            $arCiudad->setCodigoMunicipioDane('550');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '570'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUEBLO BELLO');
            $arCiudad->setCodigoMunicipioDane('570');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '614'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIO DE ORO');
            $arCiudad->setCodigoMunicipioDane('614');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '621'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PAZ');
            $arCiudad->setCodigoMunicipioDane('621');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '710'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ALBERTO');
            $arCiudad->setCodigoMunicipioDane('710');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '750'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN DIEGO');
            $arCiudad->setCodigoMunicipioDane('750');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '770'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MARTIN');
            $arCiudad->setCodigoMunicipioDane('770');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '787'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '20'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAMALAMEQUE');
            $arCiudad->setCodigoMunicipioDane('787');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTERIA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '068'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AYAPEL');
            $arCiudad->setCodigoMunicipioDane('068');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '079'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENAVISTA');
            $arCiudad->setCodigoMunicipioDane('079');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '090'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CANALETE');
            $arCiudad->setCodigoMunicipioDane('090');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '162'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CERETE');
            $arCiudad->setCodigoMunicipioDane('162');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '168'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIMA');
            $arCiudad->setCodigoMunicipioDane('168');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '182'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHINU');
            $arCiudad->setCodigoMunicipioDane('182');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '189'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIENAGA DE ORO');
            $arCiudad->setCodigoMunicipioDane('189');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '300'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COTORRA');
            $arCiudad->setCodigoMunicipioDane('300');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '350'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA APARTADA');
            $arCiudad->setCodigoMunicipioDane('350');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '417'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LORICA');
            $arCiudad->setCodigoMunicipioDane('417');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '419'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOS CORDOBAS');
            $arCiudad->setCodigoMunicipioDane('419');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '464'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOMIL');
            $arCiudad->setCodigoMunicipioDane('464');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '466'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTELIBANO');
            $arCiudad->setCodigoMunicipioDane('466');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '500'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOÑITOS');
            $arCiudad->setCodigoMunicipioDane('500');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '555'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PLANETA RICA');
            $arCiudad->setCodigoMunicipioDane('555');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '570'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUEBLO NUEVO');
            $arCiudad->setCodigoMunicipioDane('570');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '574'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO ESCONDIDO');
            $arCiudad->setCodigoMunicipioDane('574');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '580'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO LIBERTADOR');
            $arCiudad->setCodigoMunicipioDane('580');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '586'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PURISIMA');
            $arCiudad->setCodigoMunicipioDane('586');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAHAGUN');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANDRES SOTAVENTO');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '672'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANTERO');
            $arCiudad->setCodigoMunicipioDane('672');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '675'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN BERNARDO DEL VIENTO');
            $arCiudad->setCodigoMunicipioDane('675');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '678'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CARLOS');
            $arCiudad->setCodigoMunicipioDane('678');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PELAYO');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '807'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIERRALTA');
            $arCiudad->setCodigoMunicipioDane('807');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '855'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '23'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALENCIA');
            $arCiudad->setCodigoMunicipioDane('855');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUA DE DIOS');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '019'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALBAN');
            $arCiudad->setCodigoMunicipioDane('019');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '035'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANAPOIMA');
            $arCiudad->setCodigoMunicipioDane('035');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '040'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANOLAIMA');
            $arCiudad->setCodigoMunicipioDane('040');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '053'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARBELAEZ');
            $arCiudad->setCodigoMunicipioDane('053');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '086'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELTRAN');
            $arCiudad->setCodigoMunicipioDane('086');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '095'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BITUIMA');
            $arCiudad->setCodigoMunicipioDane('095');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '099'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOJACA');
            $arCiudad->setCodigoMunicipioDane('099');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '120'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CABRERA');
            $arCiudad->setCodigoMunicipioDane('120');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '123'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CACHIPAY');
            $arCiudad->setCodigoMunicipioDane('123');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '126'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAJICA');
            $arCiudad->setCodigoMunicipioDane('126');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '148'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAPARRAPI');
            $arCiudad->setCodigoMunicipioDane('148');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '151'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAQUEZA');
            $arCiudad->setCodigoMunicipioDane('151');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '154'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARMEN DE CARUPA');
            $arCiudad->setCodigoMunicipioDane('154');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '168'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHAGUANI');
            $arCiudad->setCodigoMunicipioDane('168');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '175'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIA');
            $arCiudad->setCodigoMunicipioDane('175');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '178'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIPAQUE');
            $arCiudad->setCodigoMunicipioDane('178');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '181'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHOACHI');
            $arCiudad->setCodigoMunicipioDane('181');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '183'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHOCONTA');
            $arCiudad->setCodigoMunicipioDane('183');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '200'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COGUA');
            $arCiudad->setCodigoMunicipioDane('200');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '214'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COTA');
            $arCiudad->setCodigoMunicipioDane('214');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '224'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUCUNUBA');
            $arCiudad->setCodigoMunicipioDane('224');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL COLEGIO');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '258'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PEÑON');
            $arCiudad->setCodigoMunicipioDane('258');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '260'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ROSAL');
            $arCiudad->setCodigoMunicipioDane('260');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '269'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FACATATIVA');
            $arCiudad->setCodigoMunicipioDane('269');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '279'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FOMEQUE');
            $arCiudad->setCodigoMunicipioDane('279');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '281'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FOSCA');
            $arCiudad->setCodigoMunicipioDane('281');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '286'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUNZA');
            $arCiudad->setCodigoMunicipioDane('286');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '288'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUQUENE');
            $arCiudad->setCodigoMunicipioDane('288');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '290'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUSAGASUGA');
            $arCiudad->setCodigoMunicipioDane('290');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '293'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GACHALA');
            $arCiudad->setCodigoMunicipioDane('293');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '295'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GACHANCIPA');
            $arCiudad->setCodigoMunicipioDane('295');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '297'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GACHETA');
            $arCiudad->setCodigoMunicipioDane('297');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '299'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GAMA');
            $arCiudad->setCodigoMunicipioDane('299');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '307'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GIRARDOT');
            $arCiudad->setCodigoMunicipioDane('307');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '312'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GRANADA');
            $arCiudad->setCodigoMunicipioDane('312');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '317'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACHETA');
            $arCiudad->setCodigoMunicipioDane('317');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '320'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUADUAS');
            $arCiudad->setCodigoMunicipioDane('320');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '322'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUASCA');
            $arCiudad->setCodigoMunicipioDane('322');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '324'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUATAQUI');
            $arCiudad->setCodigoMunicipioDane('324');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '326'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUATAVITA');
            $arCiudad->setCodigoMunicipioDane('326');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '328'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAYABAL DE SIQUIMA');
            $arCiudad->setCodigoMunicipioDane('328');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '335'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAYABETAL');
            $arCiudad->setCodigoMunicipioDane('335');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '339'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUTIERREZ');
            $arCiudad->setCodigoMunicipioDane('339');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '368'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JERUSALEN');
            $arCiudad->setCodigoMunicipioDane('368');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '372'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JUNIN');
            $arCiudad->setCodigoMunicipioDane('372');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '377'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CALERA');
            $arCiudad->setCodigoMunicipioDane('377');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '386'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA MESA');
            $arCiudad->setCodigoMunicipioDane('386');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '394'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PALMA');
            $arCiudad->setCodigoMunicipioDane('394');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '398'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PEÑA');
            $arCiudad->setCodigoMunicipioDane('398');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '402'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VEGA');
            $arCiudad->setCodigoMunicipioDane('402');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '407'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LENGUAZAQUE');
            $arCiudad->setCodigoMunicipioDane('407');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '426'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MACHETA');
            $arCiudad->setCodigoMunicipioDane('426');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MADRID');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '436'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANTA');
            $arCiudad->setCodigoMunicipioDane('436');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '438'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MEDINA');
            $arCiudad->setCodigoMunicipioDane('438');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '473'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOSQUERA');
            $arCiudad->setCodigoMunicipioDane('473');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '483'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NARIÑO');
            $arCiudad->setCodigoMunicipioDane('483');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '486'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NEMOCON');
            $arCiudad->setCodigoMunicipioDane('486');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '488'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NILO');
            $arCiudad->setCodigoMunicipioDane('488');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '489'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NIMAIMA');
            $arCiudad->setCodigoMunicipioDane('489');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '491'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NOCAIMA');
            $arCiudad->setCodigoMunicipioDane('491');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '506'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VENECIA');
            $arCiudad->setCodigoMunicipioDane('506');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '513'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PACHO');
            $arCiudad->setCodigoMunicipioDane('513');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '518'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAIME');
            $arCiudad->setCodigoMunicipioDane('518');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '524'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PANDI');
            $arCiudad->setCodigoMunicipioDane('524');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '530'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PARATEBUENO');
            $arCiudad->setCodigoMunicipioDane('530');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '535'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PASCA');
            $arCiudad->setCodigoMunicipioDane('535');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '572'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO SALGAR');
            $arCiudad->setCodigoMunicipioDane('572');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '580'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PULI');
            $arCiudad->setCodigoMunicipioDane('580');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '592'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUEBRADANEGRA');
            $arCiudad->setCodigoMunicipioDane('592');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '594'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUETAME');
            $arCiudad->setCodigoMunicipioDane('594');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '596'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUIPILE');
            $arCiudad->setCodigoMunicipioDane('596');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '599'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('APULO');
            $arCiudad->setCodigoMunicipioDane('599');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '612'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RICAURTE');
            $arCiudad->setCodigoMunicipioDane('612');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '645'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANTONIO DEL TEQUENDAMA');
            $arCiudad->setCodigoMunicipioDane('645');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '649'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN BERNARDO');
            $arCiudad->setCodigoMunicipioDane('649');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '653'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CAYETANO');
            $arCiudad->setCodigoMunicipioDane('653');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '658'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN FRANCISCO');
            $arCiudad->setCodigoMunicipioDane('658');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '662'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN DE RIO SECO');
            $arCiudad->setCodigoMunicipioDane('662');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '718'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SASAIMA');
            $arCiudad->setCodigoMunicipioDane('718');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '736'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SESQUILE');
            $arCiudad->setCodigoMunicipioDane('736');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '740'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIBATE');
            $arCiudad->setCodigoMunicipioDane('740');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '743'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SILVANIA');
            $arCiudad->setCodigoMunicipioDane('743');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '745'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIMIJACA');
            $arCiudad->setCodigoMunicipioDane('745');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '754'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOACHA');
            $arCiudad->setCodigoMunicipioDane('754');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '758'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOPO');
            $arCiudad->setCodigoMunicipioDane('758');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '769'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUBACHOQUE');
            $arCiudad->setCodigoMunicipioDane('769');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '772'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUESCA');
            $arCiudad->setCodigoMunicipioDane('772');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '777'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUPATA');
            $arCiudad->setCodigoMunicipioDane('777');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '779'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUSA');
            $arCiudad->setCodigoMunicipioDane('779');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '781'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUTATAUSA');
            $arCiudad->setCodigoMunicipioDane('781');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '785'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TABIO');
            $arCiudad->setCodigoMunicipioDane('785');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '793'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAUSA');
            $arCiudad->setCodigoMunicipioDane('793');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '797'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TENA');
            $arCiudad->setCodigoMunicipioDane('797');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '799'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TENJO');
            $arCiudad->setCodigoMunicipioDane('799');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '805'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIBACUY');
            $arCiudad->setCodigoMunicipioDane('805');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '807'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIBIRITA');
            $arCiudad->setCodigoMunicipioDane('807');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '815'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOCAIMA');
            $arCiudad->setCodigoMunicipioDane('815');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '817'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOCANCIPA');
            $arCiudad->setCodigoMunicipioDane('817');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '823'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOPAIPI');
            $arCiudad->setCodigoMunicipioDane('823');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '839'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UBALA');
            $arCiudad->setCodigoMunicipioDane('839');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '841'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UBAQUE');
            $arCiudad->setCodigoMunicipioDane('841');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '843'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLA DE SAN DIEGO DE UBATE');
            $arCiudad->setCodigoMunicipioDane('843');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '845'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UNE');
            $arCiudad->setCodigoMunicipioDane('845');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '851'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UTICA');
            $arCiudad->setCodigoMunicipioDane('851');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '862'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VERGARA');
            $arCiudad->setCodigoMunicipioDane('862');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '867'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VIANI');
            $arCiudad->setCodigoMunicipioDane('867');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '871'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAGOMEZ');
            $arCiudad->setCodigoMunicipioDane('871');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '873'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAPINZON');
            $arCiudad->setCodigoMunicipioDane('873');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '875'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLETA');
            $arCiudad->setCodigoMunicipioDane('875');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '878'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VIOTA');
            $arCiudad->setCodigoMunicipioDane('878');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YACOPI');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '898'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZIPACON');
            $arCiudad->setCodigoMunicipioDane('898');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '899'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '25'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZIPAQUIRA');
            $arCiudad->setCodigoMunicipioDane('899');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUIBDO');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '006'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ACANDI');
            $arCiudad->setCodigoMunicipioDane('006');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '025'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALTO BAUDO');
            $arCiudad->setCodigoMunicipioDane('025');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '050'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ATRATO');
            $arCiudad->setCodigoMunicipioDane('050');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '073'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BAGADO');
            $arCiudad->setCodigoMunicipioDane('073');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '075'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BAHIA SOLANO');
            $arCiudad->setCodigoMunicipioDane('075');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '077'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BAJO BAUDO');
            $arCiudad->setCodigoMunicipioDane('077');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '099'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOJAYA');
            $arCiudad->setCodigoMunicipioDane('099');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '135'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CANTON DEL SAN PABLO');
            $arCiudad->setCodigoMunicipioDane('135');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '150'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARMEN DEL DARIEN');
            $arCiudad->setCodigoMunicipioDane('150');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '160'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CERTEGUI');
            $arCiudad->setCodigoMunicipioDane('160');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '205'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONDOTO');
            $arCiudad->setCodigoMunicipioDane('205');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CARMEN DE ATRATO');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL LITORAL DEL SAN JUAN');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '361'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ISTMINA');
            $arCiudad->setCodigoMunicipioDane('361');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '372'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JURADO');
            $arCiudad->setCodigoMunicipioDane('372');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '413'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LLORO');
            $arCiudad->setCodigoMunicipioDane('413');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '425'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MEDIO ATRATO');
            $arCiudad->setCodigoMunicipioDane('425');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MEDIO BAUDO');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '450'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MEDIO SAN JUAN');
            $arCiudad->setCodigoMunicipioDane('450');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '491'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NOVITA');
            $arCiudad->setCodigoMunicipioDane('491');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '495'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NUQUI');
            $arCiudad->setCodigoMunicipioDane('495');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '580'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIO IRO');
            $arCiudad->setCodigoMunicipioDane('580');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '600'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIO QUITO');
            $arCiudad->setCodigoMunicipioDane('600');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '615'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIOSUCIO');
            $arCiudad->setCodigoMunicipioDane('615');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DEL PALMAR');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '745'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIPI');
            $arCiudad->setCodigoMunicipioDane('745');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '787'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TADO');
            $arCiudad->setCodigoMunicipioDane('787');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '800'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UNGUIA');
            $arCiudad->setCodigoMunicipioDane('800');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '810'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '27'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('UNION PANAMERICANA');
            $arCiudad->setCodigoMunicipioDane('810');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NEIVA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '006'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ACEVEDO');
            $arCiudad->setCodigoMunicipioDane('006');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '013'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGRADO');
            $arCiudad->setCodigoMunicipioDane('013');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '016'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AIPE');
            $arCiudad->setCodigoMunicipioDane('016');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '020'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALGECIRAS');
            $arCiudad->setCodigoMunicipioDane('020');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '026'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALTAMIRA');
            $arCiudad->setCodigoMunicipioDane('026');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '078'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARAYA');
            $arCiudad->setCodigoMunicipioDane('078');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '132'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAMPOALEGRE');
            $arCiudad->setCodigoMunicipioDane('132');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '206'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COLOMBIA');
            $arCiudad->setCodigoMunicipioDane('206');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '244'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ELIAS');
            $arCiudad->setCodigoMunicipioDane('244');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '298'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GARZON');
            $arCiudad->setCodigoMunicipioDane('298');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '306'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GIGANTE');
            $arCiudad->setCodigoMunicipioDane('306');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '319'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUADALUPE');
            $arCiudad->setCodigoMunicipioDane('319');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '349'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HOBO');
            $arCiudad->setCodigoMunicipioDane('349');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '357'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('IQUIRA');
            $arCiudad->setCodigoMunicipioDane('357');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '359'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ISNOS');
            $arCiudad->setCodigoMunicipioDane('359');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '378'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA ARGENTINA');
            $arCiudad->setCodigoMunicipioDane('378');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '396'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PLATA');
            $arCiudad->setCodigoMunicipioDane('396');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '483'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NATAGA');
            $arCiudad->setCodigoMunicipioDane('483');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '503'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OPORAPA');
            $arCiudad->setCodigoMunicipioDane('503');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '518'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAICOL');
            $arCiudad->setCodigoMunicipioDane('518');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '524'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALERMO');
            $arCiudad->setCodigoMunicipioDane('524');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '530'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALESTINA');
            $arCiudad->setCodigoMunicipioDane('530');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '548'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PITAL');
            $arCiudad->setCodigoMunicipioDane('548');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '551'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PITALITO');
            $arCiudad->setCodigoMunicipioDane('551');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '615'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIVERA');
            $arCiudad->setCodigoMunicipioDane('615');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALADOBLANCO');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '668'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN AGUSTIN');
            $arCiudad->setCodigoMunicipioDane('668');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '676'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA MARIA');
            $arCiudad->setCodigoMunicipioDane('676');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '770'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUAZA');
            $arCiudad->setCodigoMunicipioDane('770');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '791'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TARQUI');
            $arCiudad->setCodigoMunicipioDane('791');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '797'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TESALIA');
            $arCiudad->setCodigoMunicipioDane('797');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '799'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TELLO');
            $arCiudad->setCodigoMunicipioDane('799');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '801'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TERUEL');
            $arCiudad->setCodigoMunicipioDane('801');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '807'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIMANA');
            $arCiudad->setCodigoMunicipioDane('807');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '872'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAVIEJA');
            $arCiudad->setCodigoMunicipioDane('872');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '41'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YAGUARA');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIOHACHA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '035'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALBANIA');
            $arCiudad->setCodigoMunicipioDane('035');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '078'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANCAS');
            $arCiudad->setCodigoMunicipioDane('078');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '090'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DIBULLA');
            $arCiudad->setCodigoMunicipioDane('090');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '098'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DISTRACCION');
            $arCiudad->setCodigoMunicipioDane('098');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '110'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL MOLINO');
            $arCiudad->setCodigoMunicipioDane('110');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '279'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FONSECA');
            $arCiudad->setCodigoMunicipioDane('279');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '378'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HATONUEVO');
            $arCiudad->setCodigoMunicipioDane('378');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '420'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA JAGUA DEL PILAR');
            $arCiudad->setCodigoMunicipioDane('420');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAICAO');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '560'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANAURE');
            $arCiudad->setCodigoMunicipioDane('560');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '650'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN DEL CESAR');
            $arCiudad->setCodigoMunicipioDane('650');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '847'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('URIBIA');
            $arCiudad->setCodigoMunicipioDane('847');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '855'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('URUMITA');
            $arCiudad->setCodigoMunicipioDane('855');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '874'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '44'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLANUEVA');
            $arCiudad->setCodigoMunicipioDane('874');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA MARTA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '030'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALGARROBO');
            $arCiudad->setCodigoMunicipioDane('030');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '053'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARACATACA');
            $arCiudad->setCodigoMunicipioDane('053');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '058'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARIGUANI');
            $arCiudad->setCodigoMunicipioDane('058');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '161'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CERRO SAN ANTONIO');
            $arCiudad->setCodigoMunicipioDane('161');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '170'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIBOLO');
            $arCiudad->setCodigoMunicipioDane('170');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '189'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIENAGA');
            $arCiudad->setCodigoMunicipioDane('189');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '205'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONCORDIA');
            $arCiudad->setCodigoMunicipioDane('205');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL BANCO');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '258'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PIÑON');
            $arCiudad->setCodigoMunicipioDane('258');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '268'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL RETEN');
            $arCiudad->setCodigoMunicipioDane('268');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '288'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUNDACION');
            $arCiudad->setCodigoMunicipioDane('288');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAMAL');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '460'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NUEVA GRANADA');
            $arCiudad->setCodigoMunicipioDane('460');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '541'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PEDRAZA');
            $arCiudad->setCodigoMunicipioDane('541');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '545'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIJIÑO DEL CARMEN');
            $arCiudad->setCodigoMunicipioDane('545');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '551'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIVIJAY');
            $arCiudad->setCodigoMunicipioDane('551');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '555'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PLATO');
            $arCiudad->setCodigoMunicipioDane('555');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '570'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUEBLOVIEJO');
            $arCiudad->setCodigoMunicipioDane('570');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '605'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('REMOLINO');
            $arCiudad->setCodigoMunicipioDane('605');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANAS DE SAN ANGEL');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '675'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALAMINA');
            $arCiudad->setCodigoMunicipioDane('675');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '692'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN SEBASTIAN DE BUENAVISTA');
            $arCiudad->setCodigoMunicipioDane('692');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '703'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ZENON');
            $arCiudad->setCodigoMunicipioDane('703');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '707'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ANA');
            $arCiudad->setCodigoMunicipioDane('707');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '720'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA BARBARA DE PINTO');
            $arCiudad->setCodigoMunicipioDane('720');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '745'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SITIONUEVO');
            $arCiudad->setCodigoMunicipioDane('745');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '798'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TENERIFE');
            $arCiudad->setCodigoMunicipioDane('798');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '960'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZAPAYAN');
            $arCiudad->setCodigoMunicipioDane('960');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '980'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '47'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZONA BANANERA');
            $arCiudad->setCodigoMunicipioDane('980');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAVICENCIO');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '006'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ACACIAS');
            $arCiudad->setCodigoMunicipioDane('006');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '110'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANCA DE UPIA');
            $arCiudad->setCodigoMunicipioDane('110');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '124'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CABUYARO');
            $arCiudad->setCodigoMunicipioDane('124');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '150'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CASTILLA LA NUEVA');
            $arCiudad->setCodigoMunicipioDane('150');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '223'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUBARRAL');
            $arCiudad->setCodigoMunicipioDane('223');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '226'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUMARAL');
            $arCiudad->setCodigoMunicipioDane('226');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CALVARIO');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '251'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CASTILLO');
            $arCiudad->setCodigoMunicipioDane('251');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '270'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL DORADO');
            $arCiudad->setCodigoMunicipioDane('270');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '287'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUENTE DE ORO');
            $arCiudad->setCodigoMunicipioDane('287');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '313'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GRANADA');
            $arCiudad->setCodigoMunicipioDane('313');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAMAL');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '325'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAPIRIPAN');
            $arCiudad->setCodigoMunicipioDane('325');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '330'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MESETAS');
            $arCiudad->setCodigoMunicipioDane('330');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '350'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA MACARENA');
            $arCiudad->setCodigoMunicipioDane('350');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '370'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('URIBE');
            $arCiudad->setCodigoMunicipioDane('370');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LEJANIAS');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '450'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO CONCORDIA');
            $arCiudad->setCodigoMunicipioDane('450');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '568'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO GAITAN');
            $arCiudad->setCodigoMunicipioDane('568');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO LOPEZ');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '577'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO LLERAS');
            $arCiudad->setCodigoMunicipioDane('577');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '590'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO RICO');
            $arCiudad->setCodigoMunicipioDane('590');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '606'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RESTREPO');
            $arCiudad->setCodigoMunicipioDane('606');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '680'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CARLOS DE GUAROA');
            $arCiudad->setCodigoMunicipioDane('680');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '683'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN DE ARAMA');
            $arCiudad->setCodigoMunicipioDane('683');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUANITO');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '689'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MARTIN');
            $arCiudad->setCodigoMunicipioDane('689');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '711'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '50'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VISTAHERMOSA');
            $arCiudad->setCodigoMunicipioDane('711');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PASTO');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '019'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALBAN');
            $arCiudad->setCodigoMunicipioDane('019');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '022'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALDANA');
            $arCiudad->setCodigoMunicipioDane('022');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '036'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANCUYA');
            $arCiudad->setCodigoMunicipioDane('036');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '051'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARBOLEDA');
            $arCiudad->setCodigoMunicipioDane('051');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '079'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARBACOAS');
            $arCiudad->setCodigoMunicipioDane('079');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '083'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELEN');
            $arCiudad->setCodigoMunicipioDane('083');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '110'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUESACO');
            $arCiudad->setCodigoMunicipioDane('110');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '203'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COLON');
            $arCiudad->setCodigoMunicipioDane('203');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '207'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONSACA');
            $arCiudad->setCodigoMunicipioDane('207');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '210'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONTADERO');
            $arCiudad->setCodigoMunicipioDane('210');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '215'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CORDOBA');
            $arCiudad->setCodigoMunicipioDane('215');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '224'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUASPUD');
            $arCiudad->setCodigoMunicipioDane('224');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '227'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUMBAL');
            $arCiudad->setCodigoMunicipioDane('227');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '233'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUMBITARA');
            $arCiudad->setCodigoMunicipioDane('233');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '240'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHACHAGsI');
            $arCiudad->setCodigoMunicipioDane('240');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CHARCO');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '254'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PEÑOL');
            $arCiudad->setCodigoMunicipioDane('254');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '256'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ROSARIO');
            $arCiudad->setCodigoMunicipioDane('256');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '258'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL TABLON DE GOMEZ');
            $arCiudad->setCodigoMunicipioDane('258');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '260'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL TAMBO');
            $arCiudad->setCodigoMunicipioDane('260');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '287'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FUNES');
            $arCiudad->setCodigoMunicipioDane('287');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '317'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACHUCAL');
            $arCiudad->setCodigoMunicipioDane('317');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '320'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAITARILLA');
            $arCiudad->setCodigoMunicipioDane('320');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '323'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUALMATAN');
            $arCiudad->setCodigoMunicipioDane('323');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '352'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ILES');
            $arCiudad->setCodigoMunicipioDane('352');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '354'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('IMUES');
            $arCiudad->setCodigoMunicipioDane('354');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '356'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('IPIALES');
            $arCiudad->setCodigoMunicipioDane('356');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '378'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CRUZ');
            $arCiudad->setCodigoMunicipioDane('378');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '381'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA FLORIDA');
            $arCiudad->setCodigoMunicipioDane('381');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '385'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA LLANADA');
            $arCiudad->setCodigoMunicipioDane('385');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '390'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA TOLA');
            $arCiudad->setCodigoMunicipioDane('390');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '399'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA UNION');
            $arCiudad->setCodigoMunicipioDane('399');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '405'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LEIVA');
            $arCiudad->setCodigoMunicipioDane('405');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '411'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LINARES');
            $arCiudad->setCodigoMunicipioDane('411');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '418'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOS ANDES');
            $arCiudad->setCodigoMunicipioDane('418');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '427'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAGsI');
            $arCiudad->setCodigoMunicipioDane('427');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '435'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MALLAMA');
            $arCiudad->setCodigoMunicipioDane('435');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '473'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOSQUERA');
            $arCiudad->setCodigoMunicipioDane('473');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '480'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NARIÑO');
            $arCiudad->setCodigoMunicipioDane('480');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '490'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OLAYA HERRERA');
            $arCiudad->setCodigoMunicipioDane('490');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '506'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OSPINA');
            $arCiudad->setCodigoMunicipioDane('506');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '520'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FRANCISCO PIZARRO');
            $arCiudad->setCodigoMunicipioDane('520');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '540'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('POLICARPA');
            $arCiudad->setCodigoMunicipioDane('540');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '560'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('POTOSI');
            $arCiudad->setCodigoMunicipioDane('560');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '565'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PROVIDENCIA');
            $arCiudad->setCodigoMunicipioDane('565');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERRES');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '585'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUPIALES');
            $arCiudad->setCodigoMunicipioDane('585');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '612'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RICAURTE');
            $arCiudad->setCodigoMunicipioDane('612');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '621'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ROBERTO PAYAN');
            $arCiudad->setCodigoMunicipioDane('621');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '678'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAMANIEGO');
            $arCiudad->setCodigoMunicipioDane('678');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '683'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANDONA');
            $arCiudad->setCodigoMunicipioDane('683');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '685'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN BERNARDO');
            $arCiudad->setCodigoMunicipioDane('685');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '687'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LORENZO');
            $arCiudad->setCodigoMunicipioDane('687');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '693'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PABLO');
            $arCiudad->setCodigoMunicipioDane('693');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '694'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PEDRO DE CARTAGO');
            $arCiudad->setCodigoMunicipioDane('694');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '696'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA BARBARA');
            $arCiudad->setCodigoMunicipioDane('696');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '699'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTACRUZ');
            $arCiudad->setCodigoMunicipioDane('699');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '720'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAPUYES');
            $arCiudad->setCodigoMunicipioDane('720');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '786'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAMINANGO');
            $arCiudad->setCodigoMunicipioDane('786');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '788'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TANGUA');
            $arCiudad->setCodigoMunicipioDane('788');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '835'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANDRES DE TUMACO');
            $arCiudad->setCodigoMunicipioDane('835');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '838'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TUQUERRES');
            $arCiudad->setCodigoMunicipioDane('838');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '52'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YACUANQUER');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUCUTA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '003'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ABREGO');
            $arCiudad->setCodigoMunicipioDane('003');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '051'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARBOLEDAS');
            $arCiudad->setCodigoMunicipioDane('051');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '099'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOCHALEMA');
            $arCiudad->setCodigoMunicipioDane('099');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '109'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUCARASICA');
            $arCiudad->setCodigoMunicipioDane('109');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '125'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CACOTA');
            $arCiudad->setCodigoMunicipioDane('125');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '128'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CACHIRA');
            $arCiudad->setCodigoMunicipioDane('128');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '172'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHINACOTA');
            $arCiudad->setCodigoMunicipioDane('172');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '174'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHITAGA');
            $arCiudad->setCodigoMunicipioDane('174');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '206'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONVENCION');
            $arCiudad->setCodigoMunicipioDane('206');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '223'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUCUTILLA');
            $arCiudad->setCodigoMunicipioDane('223');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '239'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DURANIA');
            $arCiudad->setCodigoMunicipioDane('239');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CARMEN');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL TARRA');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '261'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ZULIA');
            $arCiudad->setCodigoMunicipioDane('261');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '313'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GRAMALOTE');
            $arCiudad->setCodigoMunicipioDane('313');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '344'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HACARI');
            $arCiudad->setCodigoMunicipioDane('344');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '347'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HERRAN');
            $arCiudad->setCodigoMunicipioDane('347');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '377'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LABATECA');
            $arCiudad->setCodigoMunicipioDane('377');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '385'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA ESPERANZA');
            $arCiudad->setCodigoMunicipioDane('385');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '398'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PLAYA');
            $arCiudad->setCodigoMunicipioDane('398');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '405'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOS PATIOS');
            $arCiudad->setCodigoMunicipioDane('405');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '418'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOURDES');
            $arCiudad->setCodigoMunicipioDane('418');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '480'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MUTISCUA');
            $arCiudad->setCodigoMunicipioDane('480');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '498'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OCAÑA');
            $arCiudad->setCodigoMunicipioDane('498');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '518'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAMPLONA');
            $arCiudad->setCodigoMunicipioDane('518');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '520'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAMPLONITA');
            $arCiudad->setCodigoMunicipioDane('520');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '553'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO SANTANDER');
            $arCiudad->setCodigoMunicipioDane('553');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '599'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RAGONVALIA');
            $arCiudad->setCodigoMunicipioDane('599');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '660'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALAZAR');
            $arCiudad->setCodigoMunicipioDane('660');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CALIXTO');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '673'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN CAYETANO');
            $arCiudad->setCodigoMunicipioDane('673');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '680'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTIAGO');
            $arCiudad->setCodigoMunicipioDane('680');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '720'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SARDINATA');
            $arCiudad->setCodigoMunicipioDane('720');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '743'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SILOS');
            $arCiudad->setCodigoMunicipioDane('743');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '800'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TEORAMA');
            $arCiudad->setCodigoMunicipioDane('800');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '810'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TIBU');
            $arCiudad->setCodigoMunicipioDane('810');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '820'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOLEDO');
            $arCiudad->setCodigoMunicipioDane('820');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '871'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLA CARO');
            $arCiudad->setCodigoMunicipioDane('871');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '874'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '54'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLA DEL ROSARIO');
            $arCiudad->setCodigoMunicipioDane('874');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARMENIA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '111'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENAVISTA');
            $arCiudad->setCodigoMunicipioDane('111');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '130'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALARCA');
            $arCiudad->setCodigoMunicipioDane('130');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '190'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIRCASIA');
            $arCiudad->setCodigoMunicipioDane('190');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '212'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CORDOBA');
            $arCiudad->setCodigoMunicipioDane('212');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '272'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FILANDIA');
            $arCiudad->setCodigoMunicipioDane('272');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '302'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GENOVA');
            $arCiudad->setCodigoMunicipioDane('302');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '401'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA TEBAIDA');
            $arCiudad->setCodigoMunicipioDane('401');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '470'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTENEGRO');
            $arCiudad->setCodigoMunicipioDane('470');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '548'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIJAO');
            $arCiudad->setCodigoMunicipioDane('548');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '594'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUIMBAYA');
            $arCiudad->setCodigoMunicipioDane('594');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '690'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '63'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALENTO');
            $arCiudad->setCodigoMunicipioDane('690');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PEREIRA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '045'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('APIA');
            $arCiudad->setCodigoMunicipioDane('045');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '075'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BALBOA');
            $arCiudad->setCodigoMunicipioDane('075');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '088'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BELEN DE UMBRIA');
            $arCiudad->setCodigoMunicipioDane('088');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '170'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DOSQUEBRADAS');
            $arCiudad->setCodigoMunicipioDane('170');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUATICA');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '383'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CELIA');
            $arCiudad->setCodigoMunicipioDane('383');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VIRGINIA');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '440'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARSELLA');
            $arCiudad->setCodigoMunicipioDane('440');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '456'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MISTRATO');
            $arCiudad->setCodigoMunicipioDane('456');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '572'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUEBLO RICO');
            $arCiudad->setCodigoMunicipioDane('572');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '594'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('QUINCHIA');
            $arCiudad->setCodigoMunicipioDane('594');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '682'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSA DE CABAL');
            $arCiudad->setCodigoMunicipioDane('682');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '687'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '66'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTUARIO');
            $arCiudad->setCodigoMunicipioDane('687');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUCARAMANGA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '013'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUADA');
            $arCiudad->setCodigoMunicipioDane('013');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '020'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALBANIA');
            $arCiudad->setCodigoMunicipioDane('020');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '051'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARATOCA');
            $arCiudad->setCodigoMunicipioDane('051');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '077'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARBOSA');
            $arCiudad->setCodigoMunicipioDane('077');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '079'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARICHARA');
            $arCiudad->setCodigoMunicipioDane('079');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '081'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANCABERMEJA');
            $arCiudad->setCodigoMunicipioDane('081');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '092'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BETULIA');
            $arCiudad->setCodigoMunicipioDane('092');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '101'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOLIVAR');
            $arCiudad->setCodigoMunicipioDane('101');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '121'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CABRERA');
            $arCiudad->setCodigoMunicipioDane('121');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '132'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALIFORNIA');
            $arCiudad->setCodigoMunicipioDane('132');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '147'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAPITANEJO');
            $arCiudad->setCodigoMunicipioDane('147');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '152'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARCASI');
            $arCiudad->setCodigoMunicipioDane('152');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '160'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CEPITA');
            $arCiudad->setCodigoMunicipioDane('160');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '162'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CERRITO');
            $arCiudad->setCodigoMunicipioDane('162');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '167'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHARALA');
            $arCiudad->setCodigoMunicipioDane('167');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '169'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHARTA');
            $arCiudad->setCodigoMunicipioDane('169');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '176'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIMA');
            $arCiudad->setCodigoMunicipioDane('176');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '179'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHIPATA');
            $arCiudad->setCodigoMunicipioDane('179');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '190'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CIMITARRA');
            $arCiudad->setCodigoMunicipioDane('190');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '207'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONCEPCION');
            $arCiudad->setCodigoMunicipioDane('207');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '209'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONFINES');
            $arCiudad->setCodigoMunicipioDane('209');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '211'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CONTRATACION');
            $arCiudad->setCodigoMunicipioDane('211');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '217'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COROMORO');
            $arCiudad->setCodigoMunicipioDane('217');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '229'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CURITI');
            $arCiudad->setCodigoMunicipioDane('229');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '235'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CARMEN DE CHUCURI');
            $arCiudad->setCodigoMunicipioDane('235');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '245'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL GUACAMAYO');
            $arCiudad->setCodigoMunicipioDane('245');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PEÑON');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '255'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL PLAYON');
            $arCiudad->setCodigoMunicipioDane('255');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '264'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ENCINO');
            $arCiudad->setCodigoMunicipioDane('264');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '266'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ENCISO');
            $arCiudad->setCodigoMunicipioDane('266');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '271'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORIAN');
            $arCiudad->setCodigoMunicipioDane('271');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '276'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORIDABLANCA');
            $arCiudad->setCodigoMunicipioDane('276');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '296'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GALAN');
            $arCiudad->setCodigoMunicipioDane('296');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '298'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GAMBITA');
            $arCiudad->setCodigoMunicipioDane('298');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '307'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GIRON');
            $arCiudad->setCodigoMunicipioDane('307');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACA');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '320'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUADALUPE');
            $arCiudad->setCodigoMunicipioDane('320');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '322'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAPOTA');
            $arCiudad->setCodigoMunicipioDane('322');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '324'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAVATA');
            $arCiudad->setCodigoMunicipioDane('324');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '327'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GsEPSA');
            $arCiudad->setCodigoMunicipioDane('327');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '344'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HATO');
            $arCiudad->setCodigoMunicipioDane('344');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '368'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JESUS MARIA');
            $arCiudad->setCodigoMunicipioDane('368');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '370'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JORDAN');
            $arCiudad->setCodigoMunicipioDane('370');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '377'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA BELLEZA');
            $arCiudad->setCodigoMunicipioDane('377');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '385'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LANDAZURI');
            $arCiudad->setCodigoMunicipioDane('385');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '397'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PAZ');
            $arCiudad->setCodigoMunicipioDane('397');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '406'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LEBRIJA');
            $arCiudad->setCodigoMunicipioDane('406');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '418'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOS SANTOS');
            $arCiudad->setCodigoMunicipioDane('418');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '425'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MACARAVITA');
            $arCiudad->setCodigoMunicipioDane('425');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '432'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MALAGA');
            $arCiudad->setCodigoMunicipioDane('432');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '444'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MATANZA');
            $arCiudad->setCodigoMunicipioDane('444');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '464'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOGOTES');
            $arCiudad->setCodigoMunicipioDane('464');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '468'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOLAGAVITA');
            $arCiudad->setCodigoMunicipioDane('468');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '498'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OCAMONTE');
            $arCiudad->setCodigoMunicipioDane('498');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '500'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OIBA');
            $arCiudad->setCodigoMunicipioDane('500');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '502'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ONZAGA');
            $arCiudad->setCodigoMunicipioDane('502');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '522'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALMAR');
            $arCiudad->setCodigoMunicipioDane('522');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '524'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALMAS DEL SOCORRO');
            $arCiudad->setCodigoMunicipioDane('524');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '533'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PARAMO');
            $arCiudad->setCodigoMunicipioDane('533');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '547'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIEDECUESTA');
            $arCiudad->setCodigoMunicipioDane('547');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '549'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PINCHOTE');
            $arCiudad->setCodigoMunicipioDane('549');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '572'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUENTE NACIONAL');
            $arCiudad->setCodigoMunicipioDane('572');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO PARRA');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '575'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO WILCHES');
            $arCiudad->setCodigoMunicipioDane('575');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '615'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIONEGRO');
            $arCiudad->setCodigoMunicipioDane('615');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '655'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANA DE TORRES');
            $arCiudad->setCodigoMunicipioDane('655');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '669'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANDRES');
            $arCiudad->setCodigoMunicipioDane('669');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '673'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN BENITO');
            $arCiudad->setCodigoMunicipioDane('673');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '679'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN GIL');
            $arCiudad->setCodigoMunicipioDane('679');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '682'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOAQUIN');
            $arCiudad->setCodigoMunicipioDane('682');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '684'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DE MIRANDA');
            $arCiudad->setCodigoMunicipioDane('684');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MIGUEL');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '689'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN VICENTE DE CHUCURI');
            $arCiudad->setCodigoMunicipioDane('689');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '705'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA BARBARA');
            $arCiudad->setCodigoMunicipioDane('705');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '720'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA HELENA DEL OPON');
            $arCiudad->setCodigoMunicipioDane('720');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '745'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIMACOTA');
            $arCiudad->setCodigoMunicipioDane('745');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '755'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SOCORRO');
            $arCiudad->setCodigoMunicipioDane('755');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '770'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUAITA');
            $arCiudad->setCodigoMunicipioDane('770');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '773'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUCRE');
            $arCiudad->setCodigoMunicipioDane('773');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '780'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SURATA');
            $arCiudad->setCodigoMunicipioDane('780');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '820'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TONA');
            $arCiudad->setCodigoMunicipioDane('820');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '855'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALLE DE SAN JOSE');
            $arCiudad->setCodigoMunicipioDane('855');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '861'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VELEZ');
            $arCiudad->setCodigoMunicipioDane('861');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '867'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VETAS');
            $arCiudad->setCodigoMunicipioDane('867');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '872'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLANUEVA');
            $arCiudad->setCodigoMunicipioDane('872');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '895'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '68'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZAPATOCA');
            $arCiudad->setCodigoMunicipioDane('895');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SINCELEJO');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '110'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENAVISTA');
            $arCiudad->setCodigoMunicipioDane('110');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '124'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAIMITO');
            $arCiudad->setCodigoMunicipioDane('124');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '204'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COLOSO');
            $arCiudad->setCodigoMunicipioDane('204');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '215'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COROZAL');
            $arCiudad->setCodigoMunicipioDane('215');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '221'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COVEÑAS');
            $arCiudad->setCodigoMunicipioDane('221');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '230'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHALAN');
            $arCiudad->setCodigoMunicipioDane('230');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '233'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ROBLE');
            $arCiudad->setCodigoMunicipioDane('233');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '235'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GALERAS');
            $arCiudad->setCodigoMunicipioDane('235');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '265'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUARANDA');
            $arCiudad->setCodigoMunicipioDane('265');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA UNION');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '418'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LOS PALMITOS');
            $arCiudad->setCodigoMunicipioDane('418');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '429'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAJAGUAL');
            $arCiudad->setCodigoMunicipioDane('429');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '473'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MORROA');
            $arCiudad->setCodigoMunicipioDane('473');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '508'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OVEJAS');
            $arCiudad->setCodigoMunicipioDane('508');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '523'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALMITO');
            $arCiudad->setCodigoMunicipioDane('523');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAMPUES');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '678'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN BENITO ABAD');
            $arCiudad->setCodigoMunicipioDane('678');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '702'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JUAN DE BETULIA');
            $arCiudad->setCodigoMunicipioDane('702');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '708'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MARCOS');
            $arCiudad->setCodigoMunicipioDane('708');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '713'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ONOFRE');
            $arCiudad->setCodigoMunicipioDane('713');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '717'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PEDRO');
            $arCiudad->setCodigoMunicipioDane('717');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '742'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LUIS DE SINCE');
            $arCiudad->setCodigoMunicipioDane('742');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '771'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUCRE');
            $arCiudad->setCodigoMunicipioDane('771');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '820'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTIAGO DE TOLU');
            $arCiudad->setCodigoMunicipioDane('820');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '823'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '70'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TOLU VIEJO');
            $arCiudad->setCodigoMunicipioDane('823');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('IBAGUE');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '024'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALPUJARRA');
            $arCiudad->setCodigoMunicipioDane('024');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '026'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALVARADO');
            $arCiudad->setCodigoMunicipioDane('026');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '030'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AMBALEMA');
            $arCiudad->setCodigoMunicipioDane('030');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '043'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANZOATEGUI');
            $arCiudad->setCodigoMunicipioDane('043');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '055'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARMERO');
            $arCiudad->setCodigoMunicipioDane('055');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '067'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ATACO');
            $arCiudad->setCodigoMunicipioDane('067');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '124'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAJAMARCA');
            $arCiudad->setCodigoMunicipioDane('124');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '148'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARMEN DE APICALA');
            $arCiudad->setCodigoMunicipioDane('148');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '152'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CASABIANCA');
            $arCiudad->setCodigoMunicipioDane('152');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '168'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHAPARRAL');
            $arCiudad->setCodigoMunicipioDane('168');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '200'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COELLO');
            $arCiudad->setCodigoMunicipioDane('200');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '217'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COYAIMA');
            $arCiudad->setCodigoMunicipioDane('217');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '226'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUNDAY');
            $arCiudad->setCodigoMunicipioDane('226');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '236'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DOLORES');
            $arCiudad->setCodigoMunicipioDane('236');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '268'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ESPINAL');
            $arCiudad->setCodigoMunicipioDane('268');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '270'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FALAN');
            $arCiudad->setCodigoMunicipioDane('270');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '275'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLANDES');
            $arCiudad->setCodigoMunicipioDane('275');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '283'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FRESNO');
            $arCiudad->setCodigoMunicipioDane('283');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '319'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUAMO');
            $arCiudad->setCodigoMunicipioDane('319');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '347'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HERVEO');
            $arCiudad->setCodigoMunicipioDane('347');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '349'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HONDA');
            $arCiudad->setCodigoMunicipioDane('349');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '352'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ICONONZO');
            $arCiudad->setCodigoMunicipioDane('352');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '408'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LERIDA');
            $arCiudad->setCodigoMunicipioDane('408');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '411'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LIBANO');
            $arCiudad->setCodigoMunicipioDane('411');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '443'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MARIQUITA');
            $arCiudad->setCodigoMunicipioDane('443');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '449'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MELGAR');
            $arCiudad->setCodigoMunicipioDane('449');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '461'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MURILLO');
            $arCiudad->setCodigoMunicipioDane('461');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '483'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NATAGAIMA');
            $arCiudad->setCodigoMunicipioDane('483');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '504'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ORTEGA');
            $arCiudad->setCodigoMunicipioDane('504');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '520'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALOCABILDO');
            $arCiudad->setCodigoMunicipioDane('520');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '547'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PIEDRAS');
            $arCiudad->setCodigoMunicipioDane('547');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '555'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PLANADAS');
            $arCiudad->setCodigoMunicipioDane('555');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '563'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PRADO');
            $arCiudad->setCodigoMunicipioDane('563');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '585'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PURIFICACION');
            $arCiudad->setCodigoMunicipioDane('585');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '616'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIOBLANCO');
            $arCiudad->setCodigoMunicipioDane('616');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '622'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RONCESVALLES');
            $arCiudad->setCodigoMunicipioDane('622');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '624'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ROVIRA');
            $arCiudad->setCodigoMunicipioDane('624');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '671'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SALDAÑA');
            $arCiudad->setCodigoMunicipioDane('671');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '675'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANTONIO');
            $arCiudad->setCodigoMunicipioDane('675');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '678'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LUIS');
            $arCiudad->setCodigoMunicipioDane('678');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '686'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ISABEL');
            $arCiudad->setCodigoMunicipioDane('686');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '770'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SUAREZ');
            $arCiudad->setCodigoMunicipioDane('770');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '854'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALLE DE SAN JUAN');
            $arCiudad->setCodigoMunicipioDane('854');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '861'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VENADILLO');
            $arCiudad->setCodigoMunicipioDane('861');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '870'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAHERMOSA');
            $arCiudad->setCodigoMunicipioDane('870');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '873'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '73'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLARRICA');
            $arCiudad->setCodigoMunicipioDane('873');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALI');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '020'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ALCALA');
            $arCiudad->setCodigoMunicipioDane('020');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '036'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANDALUCIA');
            $arCiudad->setCodigoMunicipioDane('036');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '041'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ANSERMANUEVO');
            $arCiudad->setCodigoMunicipioDane('041');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '054'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARGELIA');
            $arCiudad->setCodigoMunicipioDane('054');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '100'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BOLIVAR');
            $arCiudad->setCodigoMunicipioDane('100');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '109'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUENAVENTURA');
            $arCiudad->setCodigoMunicipioDane('109');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '111'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUADALAJARA DE BUGA');
            $arCiudad->setCodigoMunicipioDane('111');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '113'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BUGALAGRANDE');
            $arCiudad->setCodigoMunicipioDane('113');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '122'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CAICEDONIA');
            $arCiudad->setCodigoMunicipioDane('122');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '126'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALIMA');
            $arCiudad->setCodigoMunicipioDane('126');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '130'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CANDELARIA');
            $arCiudad->setCodigoMunicipioDane('130');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '147'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARTAGO');
            $arCiudad->setCodigoMunicipioDane('147');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '233'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('DAGUA');
            $arCiudad->setCodigoMunicipioDane('233');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '243'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL AGUILA');
            $arCiudad->setCodigoMunicipioDane('243');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '246'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CAIRO');
            $arCiudad->setCodigoMunicipioDane('246');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '248'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL CERRITO');
            $arCiudad->setCodigoMunicipioDane('248');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL DOVIO');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '275'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FLORIDA');
            $arCiudad->setCodigoMunicipioDane('275');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '306'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GINEBRA');
            $arCiudad->setCodigoMunicipioDane('306');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '318'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('GUACARI');
            $arCiudad->setCodigoMunicipioDane('318');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '364'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('JAMUNDI');
            $arCiudad->setCodigoMunicipioDane('364');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '377'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CUMBRE');
            $arCiudad->setCodigoMunicipioDane('377');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA UNION');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '403'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VICTORIA');
            $arCiudad->setCodigoMunicipioDane('403');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '497'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OBANDO');
            $arCiudad->setCodigoMunicipioDane('497');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '520'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PALMIRA');
            $arCiudad->setCodigoMunicipioDane('520');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '563'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PRADERA');
            $arCiudad->setCodigoMunicipioDane('563');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '606'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RESTREPO');
            $arCiudad->setCodigoMunicipioDane('606');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '616'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RIOFRIO');
            $arCiudad->setCodigoMunicipioDane('616');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '622'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ROLDANILLO');
            $arCiudad->setCodigoMunicipioDane('622');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '670'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN PEDRO');
            $arCiudad->setCodigoMunicipioDane('670');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '736'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SEVILLA');
            $arCiudad->setCodigoMunicipioDane('736');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '823'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TORO');
            $arCiudad->setCodigoMunicipioDane('823');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '828'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TRUJILLO');
            $arCiudad->setCodigoMunicipioDane('828');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '834'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TULUA');
            $arCiudad->setCodigoMunicipioDane('834');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '845'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ULLOA');
            $arCiudad->setCodigoMunicipioDane('845');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '863'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VERSALLES');
            $arCiudad->setCodigoMunicipioDane('863');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '869'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VIJES');
            $arCiudad->setCodigoMunicipioDane('869');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '890'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YOTOCO');
            $arCiudad->setCodigoMunicipioDane('890');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '892'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YUMBO');
            $arCiudad->setCodigoMunicipioDane('892');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '895'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '76'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ZARZAL');
            $arCiudad->setCodigoMunicipioDane('895');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARAUCA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '065'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ARAUQUITA');
            $arCiudad->setCodigoMunicipioDane('065');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '220'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CRAVO NORTE');
            $arCiudad->setCodigoMunicipioDane('220');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '300'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('FORTUL');
            $arCiudad->setCodigoMunicipioDane('300');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '591'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO RONDON');
            $arCiudad->setCodigoMunicipioDane('591');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '736'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SARAVENA');
            $arCiudad->setCodigoMunicipioDane('736');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '794'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '81'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAME');
            $arCiudad->setCodigoMunicipioDane('794');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YOPAL');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '010'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('AGUAZUL');
            $arCiudad->setCodigoMunicipioDane('010');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '015'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CHAMEZA');
            $arCiudad->setCodigoMunicipioDane('015');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '125'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('HATO COROZAL');
            $arCiudad->setCodigoMunicipioDane('125');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '136'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA SALINA');
            $arCiudad->setCodigoMunicipioDane('136');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '139'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MANI');
            $arCiudad->setCodigoMunicipioDane('139');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '162'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MONTERREY');
            $arCiudad->setCodigoMunicipioDane('162');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '225'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('NUNCHIA');
            $arCiudad->setCodigoMunicipioDane('225');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '230'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('OROCUE');
            $arCiudad->setCodigoMunicipioDane('230');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '250'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAZ DE ARIPORO');
            $arCiudad->setCodigoMunicipioDane('250');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '263'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PORE');
            $arCiudad->setCodigoMunicipioDane('263');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '279'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('RECETOR');
            $arCiudad->setCodigoMunicipioDane('279');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '300'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SABANALARGA');
            $arCiudad->setCodigoMunicipioDane('300');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '315'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SACAMA');
            $arCiudad->setCodigoMunicipioDane('315');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '325'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN LUIS DE PALENQUE');
            $arCiudad->setCodigoMunicipioDane('325');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '400'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAMARA');
            $arCiudad->setCodigoMunicipioDane('400');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '410'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TAURAMENA');
            $arCiudad->setCodigoMunicipioDane('410');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TRINIDAD');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '440'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '85'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLANUEVA');
            $arCiudad->setCodigoMunicipioDane('440');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MOCOA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '219'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('COLON');
            $arCiudad->setCodigoMunicipioDane('219');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '320'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('ORITO');
            $arCiudad->setCodigoMunicipioDane('320');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '568'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO ASIS');
            $arCiudad->setCodigoMunicipioDane('568');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '569'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO CAICEDO');
            $arCiudad->setCodigoMunicipioDane('569');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '571'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO GUZMAN');
            $arCiudad->setCodigoMunicipioDane('571');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '573'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LEGUIZAMO');
            $arCiudad->setCodigoMunicipioDane('573');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '749'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SIBUNDOY');
            $arCiudad->setCodigoMunicipioDane('749');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '755'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN FRANCISCO');
            $arCiudad->setCodigoMunicipioDane('755');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '757'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN MIGUEL');
            $arCiudad->setCodigoMunicipioDane('757');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '760'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTIAGO');
            $arCiudad->setCodigoMunicipioDane('760');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '865'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VALLE DEL GUAMUEZ');
            $arCiudad->setCodigoMunicipioDane('865');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '86'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('VILLAGARZON');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '88'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN ANDRES');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '564'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '88'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PROVIDENCIA');
            $arCiudad->setCodigoMunicipioDane('564');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LETICIA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '263'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL ENCANTO');
            $arCiudad->setCodigoMunicipioDane('263');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '405'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA CHORRERA');
            $arCiudad->setCodigoMunicipioDane('405');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '407'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PEDRERA');
            $arCiudad->setCodigoMunicipioDane('407');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '430'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA VICTORIA');
            $arCiudad->setCodigoMunicipioDane('430');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '460'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MIRITI - PARANA');
            $arCiudad->setCodigoMunicipioDane('460');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '530'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO ALEGRIA');
            $arCiudad->setCodigoMunicipioDane('530');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '536'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO ARICA');
            $arCiudad->setCodigoMunicipioDane('536');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '540'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO NARIÑO');
            $arCiudad->setCodigoMunicipioDane('540');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '669'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO SANTANDER');
            $arCiudad->setCodigoMunicipioDane('669');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '798'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '91'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TARAPACA');
            $arCiudad->setCodigoMunicipioDane('798');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('INIRIDA');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '343'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('BARRANCO MINAS');
            $arCiudad->setCodigoMunicipioDane('343');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '663'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MAPIRIPANA');
            $arCiudad->setCodigoMunicipioDane('663');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '883'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN FELIPE');
            $arCiudad->setCodigoMunicipioDane('883');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '884'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO COLOMBIA');
            $arCiudad->setCodigoMunicipioDane('884');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '885'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA GUADALUPE');
            $arCiudad->setCodigoMunicipioDane('885');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '886'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CACAHUAL');
            $arCiudad->setCodigoMunicipioDane('886');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '887'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PANA PANA');
            $arCiudad->setCodigoMunicipioDane('887');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '888'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '94'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MORICHAL');
            $arCiudad->setCodigoMunicipioDane('888');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '95'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SAN JOSE DEL GUAVIARE');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '015'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '95'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CALAMAR');
            $arCiudad->setCodigoMunicipioDane('015');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '025'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '95'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('EL RETORNO');
            $arCiudad->setCodigoMunicipioDane('025');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '200'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '95'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MIRAFLORES');
            $arCiudad->setCodigoMunicipioDane('200');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('MITU');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '161'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CARURU');
            $arCiudad->setCodigoMunicipioDane('161');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '511'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PACOA');
            $arCiudad->setCodigoMunicipioDane('511');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '666'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('TARAIRA');
            $arCiudad->setCodigoMunicipioDane('666');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '777'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PAPUNAUA');
            $arCiudad->setCodigoMunicipioDane('777');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '889'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '97'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('YAVARATE');
            $arCiudad->setCodigoMunicipioDane('889');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '001'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '99'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('PUERTO CARREÑO');
            $arCiudad->setCodigoMunicipioDane('001');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '524'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '99'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('LA PRIMAVERA');
            $arCiudad->setCodigoMunicipioDane('524');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '624'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '99'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('SANTA ROSALIA');
            $arCiudad->setCodigoMunicipioDane('624');
            $manager->persist($arCiudad);
        }
        $arCiudad = $manager->getRepository('App:Ciudad')->findOneBy(array('codigoMunicipioDane' => '773'));
        if (!$arCiudad) {
            $arCiudad = new Ciudad();
            $departamento = $manager->getRepository('App:Departamento')->findOneBy(array('codigoDane' => '99'));
            $arCiudad->setDepartamentoRel($departamento);
            $arCiudad->setNombre('CUMARIBO');
            $arCiudad->setCodigoMunicipioDane('773');
            $manager->persist($arCiudad);
        }
        $manager->flush();


    }
}
