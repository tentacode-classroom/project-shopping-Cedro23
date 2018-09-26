<?php
/**
 * Created by PhpStorm.
 * User: Cedric
 * Date: 26/09/2018
 * Time: 12:20
 */

namespace App\Repository;
use App\Entity\Balisong;
use PhpParser\Node\Expr\Array_;

class BalisongRepository
{
    private $balisongs;

    public function __construct()
    {
        //<editor-fold desc="Template">
        /*
            $balisong1 = new Balisong();
            $balisong1->setId();
            $balisong1->setBrand("");
            $balisong1->setModel("");
            $balisong1->setBladeLength();
            $balisong1->setBladeMaterial("");
            $balisong1->setHandle("");
            $balisong1->setLockingType("");
            $balisong1->setRef();
            $balisong1->setBladeType("");
            $balisong1->setColour("");
            $balisong1->setDescription("");
            $balisong1->setPrice();
            $balisong1->setImageUrl("");
        */
        //</editor-fold>

        $balisong1 = new Balisong();
        $balisong1->setId(1);
        $balisong1->setBrand("Rainblue");
        $balisong1->setModel("Twister");
        $balisong1->setBladeLength(90);
        $balisong1->setBladeMaterial("Acier Inoxidable");
        $balisong1->setHandle("Acier Inoxidable");
        $balisong1->setLockingType("Balisong");
        $balisong1->setRef(02114);
        $balisong1->setBladeType("Tranchant");
        $balisong1->setColour("Bleu");
        $balisong1->setDescription("Le couteau papillon Rainblue Twister 02114 est entièrement bleu et fabriqué en acier inoxydable (lame et manche) ce qui lui vaut une excellente résistance à la corrosion. Très design, ce couteau balisong sort de l'ordinaire et possède une lame bleue personnalisable marquée par le nom de la marque Espagnole en blanc : Rainblue. Pour information, la lame mesure 9cm de longueur, le manche lui est ajouré de trous et est confortable à manier au quotidien : un modèle simple d'utilisation et facilement transportable. Pratique, le couteau papillon Rainblue Twister est livré avec une housse de protection noire en velours : parfait pour le protéger avec élégance durant les déplacements. De plus, le couteau est vendu dans une boîte colorée bleue Rainblue, un modèle qui séduira tous ceux qui aiment les couteaux papillon de couleur bleu !");
        $balisong1->setPrice(15.90);
        $balisong1->setImageUrl("couteau-papillon-rainblue-twister-02114.jpg");

        $balisong2 = new Balisong();
        $balisong2->setId(2);
        $balisong2->setBrand("Albainox");
        $balisong2->setModel("Osiris");
        $balisong2->setBladeLength(100);
        $balisong2->setBladeMaterial("Acier Inoxidable");
        $balisong2->setHandle("Aluminium");
        $balisong2->setLockingType("Balisong");
        $balisong2->setRef(36217);
        $balisong2->setBladeType("Tranchant");
        $balisong2->setColour("Bleu");
        $balisong2->setDescription("Ce balisong fait parti de la gamme Osiris de la marque de couteaux Albainox. D'un design original, il est doté d'une lame style Spear Point plus large qu'à l'habitude des couteaux papillons. Cette dernière est en acier inoxydable recouvert d'une finition noire. Le manche quant à lui est en aluminium avec une texture poreuse et antidérapante de couleur bleu/noir, apportant à ce papillon un style bien à lui. ");
        $balisong2->setPrice(15.90);
        $balisong2->setImageUrl("couteau-papillon-albainox-franc-maconnerie-bleu-electrique.jpg");

        $balisong3 = new Balisong();
        $balisong3->setId(3);
        $balisong3->setBrand("Albainox");
        $balisong3->setModel("36253");
        $balisong3->setBladeLength(103);
        $balisong3->setBladeMaterial("Acier Inoxidable");
        $balisong3->setHandle("Aluminium");
        $balisong3->setLockingType("Balisong");
        $balisong3->setRef(36253);
        $balisong3->setBladeType("Entraînement");
        $balisong3->setColour("Noir");
        $balisong3->setDescription("La marque Espagnole Albainox vous propose ce couteau papillon d'entraînement (Balisong Trainer) entièrement noir. Il possède une lame noire en acier inoxydable de longueur 103mm, ajourée par quatre cercles, elle est à bout rond afin d'assurer une utilisation en toute sécurité : il est impossible de se blesser, et ça, même en tentant de faire des figures ou tricks. Au niveau du manche, il est fabriqué en aluminium noir et est aussi ajouré par de beaux motifs en forme de triangles légèrement arrondis. Comme très souvent, le manche confère à l'utilisateur une excellente prise en main : le couteau papillon d'entraînement Albainox 36523 ne vous glissera jamais entre les doigts ! Couteau balisong livré dans sa jolie boîte de couleur, un modèle idéal pour les débutants !");
        $balisong3->setPrice(10.90);
        $balisong3->setImageUrl("couteau-papillon-entrainement-albainox-noir.jpg");

        $balisong4 = new Balisong();
        $balisong4->setId(4);
        $balisong4->setBrand("Albainox");
        $balisong4->setModel("36236");
        $balisong4->setBladeLength(101);
        $balisong4->setBladeMaterial("Acier Inoxidable");
        $balisong4->setHandle("Aluminium");
        $balisong4->setLockingType("Balisong");
        $balisong4->setRef(36236);
        $balisong4->setBladeType("Tranchant");
        $balisong4->setColour("Rouge");
        $balisong4->setDescription("Ce couteau papillon Albainox référence 36236 est doté d'un manche rouge en aluminium qui ne manque pas d'attirer le regard : il est ajouré par de nombreux motifs, notamment 6 ronds présents sur les deux parties du manche avec une parfaite symétrie. La lame elle mesure 10,1cm de longueur, elle est fabriquée en acier inoxydable noir et blanc et marquée par le nom du fabricant Espagnol : à savoir Albainox. Comme pour les décorations du manche, la lame est aussi très originale : ce balisong est aussi livré dans sa boîte colorée parfaite pour offrir.");
        $balisong4->setPrice(11.90);
        $balisong4->setImageUrl("couteau-papillon-albainox-36236-manche-rouge.jpg");

        $this->balisongs = [
            $balisong1,
            $balisong2,
            $balisong3,
            $balisong4
        ];
    }

    public function findAll(): array
    {
        return $this->balisongs;
    }

    public function findOneById(int $_id) : Balisong
    {
        foreach ($this->balisongs as $balisong){
            if ($balisong->getId() == $_id)
                return $balisong;
        }
    }

}