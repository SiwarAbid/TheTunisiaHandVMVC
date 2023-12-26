<?php
require_once "TypeCrud.php";
require_once "Type.php";


$tab=array("idtype"=>3,"lib"=>"Inseret");
$p= new Type($tab);

TypeCrud::add($p);
//$p->update();

//$p->delete();
var_dump(TypeCrud::getAll());
?>