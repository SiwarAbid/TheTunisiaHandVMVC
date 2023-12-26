<?php
require_once __DIR__ .'/Categorie.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class CategorieCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `categorie`";
        return Connexion::query($rq,"Categorie");
	}
    
    
    public static function delete(){
        if(isset($_GET["idCateg"])){
        $rq="DELETE FROM `categorie` WHERE idCateg=:idCateg";
        $tab=array("idCateg"=>$_GET["idCateg"]);
        Connexion::execute($rq,$tab);
        //var_dump($tab);
        // if ( Connexion::execute($rq,$tab))
        //     echo "SUCCES\n";
        // else
        //     echo "ECHEC \n";
            /** return  Connexion::execute($rq,$tab); **/
        } 
    //var_dump(self::getAll());
    }

    public static function add($c){
        $rq="INSERT INTO `categorie`(`idCateg`, `nom`) VALUES (:idCateg,:nom)";
        $array= array("idCateg"=>$c->getAtt('idCateg'),"nom"=>$c->getAtt('nom'));
        Connexion::execute($rq,$array);
        // if( )
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        //var_dump(self::getAll());
        }
    
    public static function update($c){
            $rq="UPDATE `categorie` SET `idCateg`= :idCateg,`nom`=:nom WHERE idCateg=:idCateg";
            $array= array("idCateg"=>$c->getAtt('idCateg'),"nom"=>$c->getAtt('nom'));
            Connexion::execute($rq,$array);
            // if(Connexion::execute($rq,$array))
            // echo "update SUCESS\n";
            // else 
            // echo"update ECHEC\n";
           // var_dump(self::getAll());
        }
}
?>