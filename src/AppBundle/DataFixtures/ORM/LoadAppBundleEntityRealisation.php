<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\Mapping\ClassMetadata;
use AppBundle\Entity\Realisation;
use Doctrine\Bundle\FixturesBundle\Fixture;


/**
 * Generated by Webonaute\DoctrineFixtureGenerator.
 *
 */
class LoadAppBundleEntityRealisation extends Fixture implements OrderedFixtureInterface
{

    /**
     * Set loading order.
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }


    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $manager->getClassMetadata(Realisation::class)->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_NONE);
    
        $item2 = new Realisation();
        $this->addReference('_reference_AppBundleEntityRealisation2', $item2);
        $item2->setTitle("Projet architecture réseau");
        $item2->setYear("2017");
        $item2->setContent("Refonte total d'un réseau d'entreprise");

        $manager->persist($item2);

        $item3 = new Realisation();
        $this->addReference('_reference_AppBundleEntityRealisation3', $item3);
        $item3->setTitle("Projet jeu JavaScript");
        $item3->setYear("2016");
        $item3->setContent("Réalisation d'un jeu vidéo à l'aide du Framework Phaser");

        $manager->persist($item3);

        $item4 = new Realisation();
        $this->addReference('_reference_AppBundleEntityRealisation4', $item4);
        $item4->setTitle("Vidéo de promotion d'Ingesup");
        $item4->setYear("2016");
        $item4->setContent("Vidéo de présentation de la formation Ingesup, montée avec le logiciel Adobe Premiere Pro");

        $manager->persist($item4);

        $item5 = new Realisation();
        $this->addReference('_reference_AppBundleEntityRealisation5', $item5);
        $item5->setTitle("Projet de création de scripts d'automatisation");
        $item5->setYear("2015");
        $item5->setContent("Création de scripts de sauvegarde incrémentale, destinés à être utilisés en environnement de production");

        $manager->persist($item5);

    
        $manager->flush();
    }

}
