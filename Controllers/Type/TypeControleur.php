<?php
require_once __DIR__ .'\../../Models/Type/TypeCrud.php';
require_once __DIR__ .'\../../Models/Type/Type.php';

class TypeControleur{

    public static function liste(){
        $types =TypeCrud::getAll();
        require_once __DIR__ .'\../../Views/Type/ListeType.php';

    }

    public static function delete(){
        if (isset($_GET["idtype"])){
        $tab=array("idtype"=>$_GET["idtype"]);
        $c= new TypeCrud($tab);
        $c->delete();
        }
        // self::liste();
        
    }

    public static function update($tab){
        // self::$i=0;
        // $tab=array("idtype"=>22,"lib"=>"TypeUpdate".$i);
        $c= new Type($tab);
        TypeCrud::update($c);
        // self::$i++;
    }

    public static function insert($tab){
        //$tab=array("lib"=>"TypeInseret");
        $c= new Type($tab);
        TypeCrud::add($c);

    }

}
