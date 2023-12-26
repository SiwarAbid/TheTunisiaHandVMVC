<?php
require_once __DIR__ .'/../../Models/Client/ClientCrud.php';
require_once __DIR__ .'/../../Models/Client/Client.php';

class CLientControleur{

    public static function liste(){
        $clients =ClientCrud::getAll();
        require_once __DIR__ .'/../../Views/Client/ListeClient.php';

    }

    public static function delete(){

        if (isset($_GET["cin"])){
        $tab=array("cin"=>$_GET["cin"]);
        $c= new ClientCrud($tab);
        $c->delete();
        }
        
    }

    public static function update($tab){
        $c= new Client($tab);
        ClientCrud::update($c);
    }

    public static function insert($tab){
        $c= new Client($tab);
        ClientCrud::add($c);
    }

}