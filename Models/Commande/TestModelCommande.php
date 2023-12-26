<?php
require_once "CommandeCrud.php";
require_once "Commande.php";


$tab=array("idCom"=>1,"prixT"=>100.20, "qte"=>0);
$p= new Commande($tab);

CommandeCrud::add($p);
//$p->update();

//$p->delete();
var_dump(CommandeCrud::getAll());
?>