<?php
require_once __DIR__ .'\..\Models\Categorie\CategorieCrud.php';
require_once __DIR__ .'/../Models/Produit/ProduitCrud.php';
require_once __DIR__ .'/../Models/Couleur/CouleurCrud.php';
require_once __DIR__ .'/../Models/Type/TypeCrud.php';

class Controller{

public static function liste(){
    $categories =CategorieCrud::getAll();
    $produits =ProduitCrud::getAll();
    $couleurs =CouleurCrud::getAll();
    $types =TypeCrud::getAll();

    require_once __DIR__ .'\..\Views\Produits.php';
    }
}
Controller::liste();

?>