<?php

namespace App\DataFixtures;

use App\Entity\Balisong;
use App\Entity\Material;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TestFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        $balisong = new Balisong();
//        $balisong->setBrand('');
//        $balisong->setModel("");
//        $balisong->setColour("");
//        $balisong->setBladeLength();
//        $balisong->setBladeMaterial("");
//        $balisong->setBladeType("");
//        $balisong->setLockingType("");
//        $balisong->setHandle("");
//        $balisong->setDescription("");
//        $balisong->setPrice();
//        $balisong->setRef();
//        $balisong->setImageUrl("");
//        $balisong->setViewCount(0);

        $balisong1 = new Balisong();
        $balisong2 = new Balisong();
        $balisong3 = new Balisong();
        $balisong4 = new Balisong();
        $balisong5 = new Balisong();
        $balisong6 = new Balisong();
        $balisong7 = new Balisong();
        $balisong8 = new Balisong();

        $balisongs = [
            $balisong1,
            $balisong2,
            $balisong3,
            $balisong4,
            $balisong5,
            $balisong6,
            $balisong7,
            $balisong8
        ];

        //<editor-fold desc="Balisong 1">
        $balisong1->setBrand('Albainox');
        $balisong1->setModel("Colorful");
        $balisong1->setColour("Bleu et noir");
        $balisong1->setBladeLength(90);
        $balisong1->setBladeMaterial("Acier Inoxidable");
        $balisong1->setBladeType("Tranchant");
        $balisong1->setLockingType("Balisong");
        $balisong1->setHandle("Aluminium + ABS");
        $balisong1->setDescription("Si le bleu et le noir sont vos couleurs favorites, alors vous ne pourrez qu'apprécier ce couteau papillon Albainox référence 02129. Il possède une lame de 9cm conçue en acier inoxydable bleu décoré par des lignes noires pour un résultat juste époustouflant. La lame bleue/noire est décorée par le logo du fabricant Espagnol Albainox en blanc écrit à la verticale. Et ce qui est très élégant, c'est que le manche se compose des mêmes couleurs que la lame : soit le bleu et le noir, il est lui fabriqué en acier inoxydable et ABS. Design, le manche est aussi très ergonomique en conférant à l'utilisateur une très bonne prise en main en toutes circonstances. Couteau balisong livré en boîte colorée.");
        $balisong1->setPrice(15.90);
        $balisong1->setRef("02129");
        $balisong1->setImageUrl("couteau-papillon-albainox-colorful-bleu-et-noir.jpg");
        $balisong1->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 2">
        $balisong2 = new Balisong();
        $balisong2->setBrand('');
        $balisong2->setModel("");
        $balisong2->setColour("");
        $balisong2->setBladeLength();
        $balisong2->setBladeMaterial("");
        $balisong2->setBladeType("");
        $balisong2->setLockingType("");
        $balisong2->setHandle("");
        $balisong2->setDescription("");
        $balisong2->setPrice();
        $balisong2->setRef();
        $balisong2->setImageUrl("");
        $balisong2->setViewCount(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 3">
        $balisong = new Balisong();
        $balisong->setBrand('');
        $balisong->setModel("");
        $balisong->setColour("");
        $balisong->setBladeLength();
        $balisong->setBladeMaterial("");
        $balisong->setBladeType("");
        $balisong->setLockingType("");
        $balisong->setHandle("");
        $balisong->setDescription("");
        $balisong->setPrice();
        $balisong->setRef();
        $balisong->setImageUrl("");
        $balisong->setViewCount(0);
        //</editor-fold>

        for($i = 0; $i < count($balisongs); $i++)
        {
            $manager->persist($balisongs[$i]);
        }

        $material1 = new Material();
        $material1->setName("Acier Inoxidable");

        $manager->persist($material1);

        $material2 = new Material();
        $material2->setName("Aluminium");

        $manager->persist($material2);

        $manager->flush();
    }
}
