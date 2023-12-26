<?php
require_once "CategorieCrud.php";
require_once "Categorie.php";


//$tab=array("id"=>3,"nom"=>"CategInseret");
//$p= new Categorie($tab);

//CategorieCrud::add($p);
//$p->update();

CategorieCrud::delete();
var_dump(CategorieCrud::getAll());
?>