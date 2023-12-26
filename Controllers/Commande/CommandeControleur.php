<?php
require_once __DIR__ .'/../../Models/Commande/CommandeCrud.php';
require_once __DIR__ .'/../../Models/Commande/Commande.php';

class CommandeControleur{

    public static function liste(){
        $commandes =CommandeCrud::getAll();
        require_once __DIR__ .'/../../Views/Commande/ListeCom.php';

    }

    public static function delete(){
        if (isset($_GET["idCom"])){
        $tab=array("idCom"=>$_GET["idCom"]);
        $c= new CommandeCrud($tab);
        $c->delete();
        }
        //self::liste();
        
    }

    public static function updateCom($tab){
        // self::$i=0;
        // $tab=array("idCom"=>0,"nom"=>"ComUpdate".$i);
        $c= new Commande($tab);
        CommandeCrud::update($c);
        //self::$i++;
    }

    public static function insert($tab){
        // $tab=array("prixT"=>100.500, "qte"=>0);
        $c= new Commande($tab);
        CommandeCrud::add($c);

    }

}