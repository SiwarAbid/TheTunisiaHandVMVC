<?php
require_once __DIR__ .'/../../Models/Couleur/CouleurCrud.php';
require_once __DIR__ .'/../../Models/Couleur/Couleur.php';

class CouleurControleur{

    public static function liste(){
        $couleurs =CouleurCrud::getAll();
        require_once __DIR__ .'/../../Views/Couleur/ListeCouleur.php';

    }

    public static function delete(){
        if (isset($_GET["ref"])){
        $tab=array("ref"=>$_GET["ref"]);
        $c= new CouleurCrud($tab);
        $c->delete();
        }
        // self::liste();
        
    }

    public static function update($tab){
        // self::$i=0;
        // $tab=array("ref"=>22,"nom"=>"CouleurUpdate".$i);
        $c= new Couleur($tab);
        CouleurCrud::update($c);
        // self::$i++;
    }

    public static function insert($tab){
        //$tab=array("nom"=>"CouleurInseret");
        $c= new Couleur($tab);
        CouleurCrud::add($c);
    }

}