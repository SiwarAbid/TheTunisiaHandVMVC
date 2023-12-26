<?php
require_once "CouleurCrud.php";
require_once "Couleur.php";


$tab=array("ref"=>1,"nom"=>"CouInseret");

$p= new Couleur($tab);
var_dump($p);
CouleurCrud::add($p);
echo"-----------------------------";
//$p->update();

//$p->delete();
var_dump(CouleurCrud::getAll());
?>