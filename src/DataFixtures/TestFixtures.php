<?php

namespace App\DataFixtures;

use App\Entity\Balisong;
use App\Entity\Material;
use DeepCopy\f001\B;
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
//
//        $material = new Material();
//        $material ->setName("");

        $materialAcier = new Material();
        $materialAcier->setName("Acier");

        $manager->persist($materialAcier);

        $materialInox = new Material();
        $materialInox->setName("Acier Inoxidable");

        $manager->persist($materialInox);

        $materialAluminium = new Material();
        $materialAluminium->setName("Aluminium");

        $manager->persist($materialAluminium);

        $materialD2 = new Material();
        $materialD2->setName("Acier D2");

        $manager->persist($materialD2);

        $materialG10 = new Material();
        $materialG10->setName("Acier G10");

        $manager->persist($materialG10);


        $materialCPM_S30V = new Material();
        $materialCPM_S30V->setName("Acier CPM s30v");

        $manager->persist($materialCPM_S30V);


        //<editor-fold desc="Balisong 1">
        $balisong1 = new Balisong();
        $balisong1->setBrand('Albainox');
        $balisong1->setModel("Colorful");
        $balisong1->setColour("Bleu et noir");
        $balisong1->setBladeLength(90);
        $balisong1->setBladeMaterial($materialInox);
        $balisong1->setBladeType("Tranchant");
        $balisong1->setLockingType("Balisong");
        $balisong1->setHandle($materialAluminium);
        $balisong1->setDescription("Si le bleu et le noir sont vos couleurs favorites, alors vous ne pourrez qu'apprécier ce couteau papillon Albainox référence 02129. Il possède une lame de 9cm conçue en acier inoxydable bleu décoré par des lignes noires pour un résultat juste époustouflant. La lame bleue/noire est décorée par le logo du fabricant Espagnol Albainox en blanc écrit à la verticale. Et ce qui est très élégant, c'est que le manche se compose des mêmes couleurs que la lame : soit le bleu et le noir, il est lui fabriqué en acier inoxydable et ABS. Design, le manche est aussi très ergonomique en conférant à l'utilisateur une très bonne prise en main en toutes circonstances. Couteau balisong livré en boîte colorée.");
        $balisong1->setPrice(15.90);
        $balisong1->setRef("02129");
        $balisong1->setImageUrl("couteau-papillon-albainox-colorful-bleu-et-noir.jpg");
        $balisong1->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 2">
        $balisong2 = new Balisong();
        $balisong2->setBrand('Rainblue');
        $balisong2->setModel("Twister");
        $balisong2->setColour("Bleu");
        $balisong2->setBladeLength(90);
        $balisong2->setBladeMaterial($materialInox);
        $balisong2->setBladeType("Tranchant");
        $balisong2->setLockingType("Balisong");
        $balisong2->setHandle($materialAcier);
        $balisong2->setDescription("Le couteau papillon Rainblue Twister 02114 est entièrement bleu et fabriqué en acier inoxydable (lame et manche) ce qui lui vaut une excellente résistance à la corrosion. Très design, ce couteau balisong sort de l'ordinaire et possède une lame bleue personnalisable marquée par le nom de la marque Espagnole en blanc : Rainblue. Pour information, la lame mesure 9cm de longueur, le manche lui est ajouré de trous et est confortable à manier au quotidien : un modèle simple d'utilisation et facilement transportable. Pratique, le couteau papillon Rainblue Twister est livré avec une housse de protection noire en velours : parfait pour le protéger avec élégance durant les déplacements. De plus, le couteau est vendu dans une boîte colorée bleue Rainblue, un modèle qui séduira tous ceux qui aiment les couteaux papillon de couleur bleu !");
        $balisong2->setPrice(15.90);
        $balisong2->setRef("02114");
        $balisong2->setImageUrl("couteau-papillon-rainblue-twister-02114.jpg");
        $balisong2->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 3">
        $balisong3 = new Balisong();
        $balisong3->setBrand('Albainox');
        $balisong3->setModel("36236");
        $balisong3->setColour("Rouge");
        $balisong3->setBladeLength(101);
        $balisong3->setBladeMaterial($materialInox);
        $balisong3->setBladeType("Tranchant");
        $balisong3->setLockingType("Balisong");
        $balisong3->setHandle($materialAluminium);
        $balisong3->setDescription("Ce couteau papillon Albainox référence 36236 est doté d'un manche rouge en aluminium qui ne manque pas d'attirer le regard : il est ajouré par de nombreux motifs, notamment 6 ronds présents sur les deux parties du manche avec une parfaite symétrie. La lame elle mesure 10,1cm de longueur, elle est fabriquée en acier inoxydable noir et blanc et marquée par le nom du fabricant Espagnol : à savoir Albainox. Comme pour les décorations du manche, la lame est aussi très originale : ce balisong est aussi livré dans sa boîte colorée parfaite pour offrir.");
        $balisong3->setPrice(11.90);
        $balisong3->setRef("");
        $balisong3->setImageUrl("couteau-papillon-albainox-36236-manche-rouge.jpg");
        $balisong3->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 4">
        $balisong4 = new Balisong();
        $balisong4->setBrand('Albainox');
        $balisong4->setModel("Osiris Bleu");
        $balisong4->setColour("Rouge");
        $balisong4->setBladeLength(100);
        $balisong4->setBladeMaterial($materialInox);
        $balisong4->setBladeType("Tranchant");
        $balisong4->setLockingType("Balisong");
        $balisong4->setHandle($materialAluminium);
        $balisong4->setDescription("Ce balisong fait parti de la gamme Osiris de la marque de couteaux Albainox. D'un design original, il est doté d'une lame style Spear Point plus large qu'à l'habitude des couteaux papillons. Cette dernière est en acier inoxydable recouvert d'une finition noire. Le manche quant à lui est en aluminium avec une texture poreuse et antidérapante de couleur bleu/noir, apportant à ce papillon un style bien à lui. ");
        $balisong4->setPrice(10.90);
        $balisong4->setRef("36217");
        $balisong4->setImageUrl("couteau-papillon-albainox-franc-maconnerie-bleu-electrique.jpg");
        $balisong4->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 5">
        $balisong5 = new Balisong();
        $balisong5->setBrand('Albainox');
        $balisong5->setModel("Entrainement");
        $balisong5->setColour("Noir");
        $balisong5->setBladeLength(103);
        $balisong5->setBladeMaterial($materialInox);
        $balisong5->setBladeType("Entrainement");
        $balisong5->setLockingType("Balisong");
        $balisong5->setHandle($materialAluminium);
        $balisong5->setDescription("La marque Espagnole Albainox vous propose ce couteau papillon d'entraînement (Balisong Trainer) entièrement noir. Il possède une lame noire en acier inoxydable de longueur 103mm, ajourée par quatre cercles, elle est à bout rond afin d'assurer une utilisation en toute sécurité : il est impossible de se blesser, et ça, même en tentant de faire des figures ou tricks. Au niveau du manche, il est fabriqué en aluminium noir et est aussi ajouré par de beaux motifs en forme de triangles légèrement arrondis. Comme très souvent, le manche confère à l'utilisateur une excellente prise en main : le couteau papillon d'entraînement Albainox 36523 ne vous glissera jamais entre les doigts ! Couteau balisong livré dans sa jolie boîte de couleur, un modèle idéal pour les débutants !");
        $balisong5->setPrice(11.90);
        $balisong5->setRef("36253");
        $balisong5->setImageUrl("couteau-papillon-entrainement-albainox-noir.jpg");
        $balisong5->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 6">
        $balisong6 = new Balisong();
        $balisong6->setBrand('Albainox');
        $balisong6->setModel("Colorful");
        $balisong6->setColour("Rouge et noir");
        $balisong6->setBladeLength(103);
        $balisong6->setBladeMaterial($materialInox);
        $balisong6->setBladeType("Entrainement");
        $balisong6->setLockingType("Balisong");
        $balisong6->setHandle($materialAluminium);
        $balisong6->setDescription("Voilà un couteau papillon Albainox qui va énormément plaire à tous ceux qui aiment les balisong rouges et noirs ! Ce modèle portant la référence 02128 possède un manche conçu en acier inoxydable et ABS coloris noir et rouge. Il faut souligner le fait que le manche est légèrement courbé afin d'offrir une meilleure tenue de main. De longueur 9cm, la lame est fabriquée en acier inoxydable rouge avec quelques tâches noires en guise de décoration, elle est vraiment magnifique. À bout pointu, la lame se révèle particulièrement tranchante et résistante.  Conçu en Espagne, ce couteau papillon Albainox est livré en boîte colorée.");
        $balisong6->setPrice(15.90);
        $balisong6->setRef("02128");
        $balisong6->setImageUrl("couteau-papillon-albainox-colorful-rouge-et-noir.jpg");
        $balisong6->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 7">
        $balisong7 = new Balisong();
        $balisong7->setBrand('Albainox');
        $balisong7->setModel("Ninja Rouge");
        $balisong7->setColour("Rouge");
        $balisong7->setBladeLength(103);
        $balisong7->setBladeMaterial($materialInox);
        $balisong7->setBladeType("Tranchant");
        $balisong7->setLockingType("Balisong");
        $balisong7->setHandle($materialAluminium);
        $balisong7->setDescription("Muni de la référence 36248, ce couteau papillon va plaire à tous ceux qui aiment les balisong rouges et noirs. Ce modèle NINJA doit son nom en raison de son manche en aluminium noir et rouge légèrement incurvé pour une meilleure prise en main. Lorsque les deux parties du manche sont réunies, on peut apercevoir des motifs losanges noirs apportant une forte dose d'élégance. Côté lame, elle reste fabriquée en acier inoxydable et mesure toujours 103mm de long, elle est aussi légèrement courbée avec une forme proche de celle du sabre. Elle est également décorée par le logo du fabricant Espagnol Albainox et comporte une finition noire en parfaite harmonie avec le manche. Ce couteau papillon Ninja Rouge Albainox est vendu avec sa boîte colorée.");
        $balisong7->setPrice(15.90);
        $balisong7->setRef("36248");
        $balisong7->setImageUrl("couteau-papillon-ninja-rouge-albainox.jpg");
        $balisong7->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 8">
        $balisong8 = new Balisong();
        $balisong8->setBrand('Albainox');
        $balisong8->setModel("Marron Eclat");
        $balisong8->setColour("Marron");
        $balisong8->setBladeLength(110);
        $balisong8->setBladeMaterial($materialInox);
        $balisong8->setBladeType("Tranchant");
        $balisong8->setLockingType("Balisong");
        $balisong8->setHandle($materialAluminium);
        $balisong8->setDescription("Ce couteau papillon Albainox est très original en raison du fait qu'il est l'un des seuls de la marque a être entièrement marron. De manière beaucoup plus générale, il est très rare que les balisong soient colorés ainsi ce qui renforce encore plus le sentiment d'originalité. Ce modèle 02117 dispose d'une lame à bout pointu marron toujours conçue en acier inoxydable : elle mesure 110mm de longueur. Le manche lui est aussi fabriqué en acier inox : résistant à la corrosion, il est décoré d'un très bel effet éclat qui séduira de nombreux utilisateurs de balisong. Couteau papillon Albainox conçu en Espagne et livré en boîte cadeau colorée.");
        $balisong8->setPrice(11.90);
        $balisong8->setRef("02117");
        $balisong8->setImageUrl("couteau-papillon-albainox-marron-eclat.jpg");
        $balisong8->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 9">
        $balisong9 = new Balisong();
        $balisong9->setBrand('Benchmade');
        $balisong9->setModel("BN51BK MORPHO");
        $balisong9->setColour("Noir");
        $balisong9->setBladeLength(108);
        $balisong9->setBladeMaterial($materialD2);
        $balisong9->setBladeType("Tranchant");
        $balisong9->setLockingType("Balisong");
        $balisong9->setHandle($materialG10);
        $balisong9->setDescription("Le couteau papillon Benchmade BN51BK MORPHO est muni d'une allure très moderne de part son manche noir en G10 avec insert anodisé bleu. Très réussi visuellement, le manche est aussi très ergonomique en conférant une excellente prise en main à l'utilisateur. Autre avantage, le manche ne mesure que 130mm de long et pourra par conséquent être rangé avec beaucoup de facilité au quotidien. Le transport est également facilité grâce à la présence d'un clip réversible. Mais le couteau balisong Benchmade 51BK MORPHO, ce n'est pas qu'un manche, c'est aussi une lame noire lisse profil drop point conçue en acier inoxydable D2, un acier de très haute qualité. Elle ne craint pas la corrosion et offre à l'utilisateur un excellent tranchant. Un magnifique couteau balisong fabriqué aux USA, il bénéficie de tout le savoir faire de la célèbre coutellerie Benchmade.");
        $balisong9->setPrice(279.90);
        $balisong9->setRef("Benchmade BN51BK morpho");
        $balisong9->setImageUrl("couteau-benchmade-bn51bk-morpho.jpg");
        $balisong9->setViewCounter(0);
        //</editor-fold>

        //<editor-fold desc="Balisong 10">
        $balisong10 = new Balisong();
        $balisong10->setBrand('Benchmade');
        $balisong10->setModel("BN87 TI");
        $balisong10->setColour("Noir");
        $balisong10->setBladeLength(114);
        $balisong10->setBladeMaterial($materialCPM_S30V);
        $balisong10->setBladeType("Tranchant");
        $balisong10->setLockingType("Balisong");
        $balisong10->setHandle($materialG10);
        $balisong10->setDescription("Voilà un couteau papillon Benchmade qui devrait ravir tous les collectionneurs de couteaux type Balisong. Ce modèle BN87 TI Balisong se dote d'une longue lame blanche de 114mm de longueur en acier CPM S30V, elle est d'un tranchant incomparable. Côté manche, il se compose de deux parties mobiles grises en titane, comme tout bon couteau papillon qui se respecte. Le Benchmade BN87 TI Balisong est un couteau d'exception à placer entre les mains d'experts. De plus, un étui type Cordura est également présent pour protéger le couteau lors de vos aventures.");
        $balisong10->setPrice(599.90);
        $balisong10->setRef("BN87");
        $balisong10->setImageUrl("couteau-papillon-benchmade-bn87-ti-balisong.jpg");
        $balisong10->setViewCounter(0);
        //</editor-fold>





        $manager->persist($balisong1);
        $manager->persist($balisong2);
        $manager->persist($balisong3);
        $manager->persist($balisong4);
        $manager->persist($balisong5);
        $manager->persist($balisong6);
        $manager->persist($balisong7);
        $manager->persist($balisong8);
        $manager->persist($balisong9);
        $manager->persist($balisong10);
        $manager->flush();
    }
}
