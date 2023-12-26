<?php
require_once __DIR__ .'/../../Models/Produit/ProduitCrud.php';
require_once __DIR__ .'/../../Models/Produit/Produit.php';


class ProduitControleur{

    public static function liste(){
        $produits =ProduitCrud::getAll();
        require_once __DIR__ .'/../../Views/Produit/ListeProduit.php';

    }

    public static function delete(){
        if (isset($_GET["idProd"])){
        $tab=array("idProd"=>$_GET["idProd"]);
        $c= new ProduitCrud($tab);
        $c->delete();
        }
        // self::liste();
        
    }

    public static function update($tab){
        // self::$i=0;
        // $tab=array("idProd"=>1,"type"=>$i,"nom"=>"ProdUpdate".$i, "img"=>"imageTest.png", "stock"=>0, "prix"=>10.20, "couleur"=>0 ,"categ"=>0);
        $c= new Produit($tab);
        ProduitCrud::update($c);
        // self::$i++;
    }

    public static function insert($tab){
        // $tab=array("nom"=>"ProdInseret");
        $c= new Produit($tab);
        ProduitCrud::add($c);

    }

    // public static function getProduitsByCategorie($idCateg) {
    //     $query = "SELECT idProd, type.lib AS type_produit ,nom, stock, prix, img, couleur.nom AS nom_couleur, categorie.nom AS nom_categorie
    //         FROM produit
    //         JOIN couleur ON produit.couleur = couleur.ref
    //         JOIN categorie ON produit.categorie = categorie.idCateg
    //         WHERE categorie.idCateg = :idCateg";
    //     $tab= array('idCateg'=> $idCateg);
    //     Connexion::execute($query,$tab);

    //     //Connexion::query($query,"ProduitControleur");
    // }

}