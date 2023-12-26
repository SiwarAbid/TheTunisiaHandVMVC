<?php
class Connexion{
    private static $connex= NULL;

    private static function init(){
        self::$connex= new PDO("mysql:host=localhost:3307;dbname=thetunisiahand","root","");
       // echo "<br/>.. Initialisation du Connexion ..<br/>";
    }

    private static function getConnex(){
        if (self:: $connex == NULL)
        self::init();
        return self::$connex;
    }

    public static function query($rq,$class){
        $stm=self::getConnex() -> query($rq);
        $stm->setfetchmode(PDO::FETCH_CLASS ,$class);
        return  $stm -> fetchAll();
    }


    public static function execute($rq,$tab){
        $stm=  self::getConnex()  -> prepare($rq);
        return $stm -> execute($tab); /**return boolean */
    }
}

?>