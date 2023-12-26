<?php
require_once __DIR__ .'/Commande.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class CommandeCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `commande`";
        return Connexion::query($rq,"Commande");
	}
    
    
    public static function delete(){
        if(isset($_GET["idCom"])){
        $rq="DELETE FROM `commande` WHERE idCom=:idCom";
        $tab=array("idCom"=>$_GET["idCom"]);
        Connexion::execute($rq,$tab);
        //var_dump($tab);
        // if ( Connexion::execute($rq,$tab))
        //     //echo "SUCCES\n";
        // else
        //     //echo "ECHEC \n";
            /** return  Connexion::execute($rq,$tab); **/
        }
    }

    public static function add($c){
        $rq="INSERT INTO `commande`(`idCom`, `prixT`, `qte`) VALUES (:idCom,:prixT, :qte)";
        $array= array("idCom"=>$c->getAtt('idCom'),"prixT"=>$c->getAtt('prixT'), "qte"=>$c->getAtt('qte'));
        Connexion::execute($rq,$array);
        // if( Connexion::execute($rq,$array))
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        // var_dump(self::getAll());
        }
    
    public static function update($c){
            $rq="UPDATE `commande` SET `idCom`= :idCom,`prixT`=:prixT WHERE idCom=:idCom";
            $array= array("idCom"=>$c->getAtt('idCom'),"prixT"=>$c->getAtt('prixT'), "qte"=>$c->getAtt('qte'));
            Connexion::execute($rq,$array);
            // if(Connexion::execute($rq,$array))
            // echo "update SUCESS\n";
            // else 
            // echo"update ECHEC\n";
            // var_dump(self::getAll());
        }
}
?>