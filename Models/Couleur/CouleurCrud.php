<?php
require_once __DIR__ .'/Couleur.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class CouleurCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `couleur`";
        return Connexion::query($rq,"Couleur");
	}
    
    
    public static function delete(){
        if(isset($_GET["ref"])){
        $rq="DELETE FROM `couleur` WHERE ref=:ref";
        $tab=array("ref"=>$_GET["ref"]);
        Connexion::execute($rq,$tab);
        }
        // var_dump($tab);
        // if ( Connexion::execute($rq,$tab))
        //     echo "SUCCES\n";
        // else
        //     echo "ECHEC \n";
            /** return  Connexion::execute($rq,$tab); **/
    }

    public static function add($c){
        $rq="INSERT INTO `couleur`(`ref`, `nom`) VALUES (:ref,:nom)";
        $array= array("ref"=>$c->getAtt('ref'),"nom"=>$c->getAtt('nom'));
        Connexion::execute($rq,$array);

        // if( Connexion::execute($rq,$array))
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        // var_dump(self::getAll());
        }
    
    public static function update($c){
        $rq="UPDATE `couleur` SET `ref`= :ref,`nom`=:nom WHERE ref=:ref";
        $array= array("ref"=>$c->getAtt('ref'),"nom"=>$c->getAtt('nom'));
        Connexion::execute($rq,$array);

        // if(Connexion::execute($rq,$array))
        // echo "update SUCESS\n";
        // else 
        // echo"update ECHEC\n";
        // var_dump(self::getAll());
        }
}
?>