<?php
require_once "ClientCrud.php";
require_once "Client.php";


$tab=array("cin"=>1,"nom"=>"ClientsInseret", "prenom"=>"", "adr"=>"", "motdepasse"=>"");
$p= new Client($tab);
$c= new ClientCrud();
$array= $c->findByCin(4959970);
// ClientCrud::add($p);
//$p->update();

//$p->delete();
// var_dump(ClientCrud::getAll());
?>