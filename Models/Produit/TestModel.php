<?php
require_once "ProduitCrud.php";
require_once "Produit.php";


$tab=array("idProd"=>1,"nom"=>"NewProduit", "type"=>0, "img"=>"test.png", "stock"=>0, "prix"=>10.02, "couleur"=>0, "categ"=>0);
$p= new Produit($tab);
//var_dump($p);
//ProduitCrud::add($p);
//$p->update();

//$p->delete();
var_dump(ProduitCrud::getAll());
?>