<?php
require_once __DIR__ .'\..\..\Models\Categorie\CategorieCrud.php';
require_once __DIR__ .'\..\..\Models\Categorie\Categorie.php';

class CategorieControleur{

    public static function liste(){
        $categories =CategorieCrud::getAll();
        require_once __DIR__ .'\..\..\Views\Categorie\ListeCateg.php';

    }

    public static function delete(){
          
        if (isset($_GET["idCateg"])){
        $tab=array("idCateg"=>$_GET["idCateg"]);
        $c= new CategorieCrud($tab);
        $c->delete();
        }
        //require_once __DIR__ .'/../../Confirmation.php';
        
    }

    public static function updateCateg($tab){
        $c= new Categorie($tab);
        CategorieCrud::update($c);
        // header('Location: ../View/ListeCateg.php');
        // exit;
        
    }

    public static function insert($tab){
        $c= new Categorie($tab);
        CategorieCrud::add($c);
    }
}