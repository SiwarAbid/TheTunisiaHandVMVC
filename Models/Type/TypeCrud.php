<?php
require_once __DIR__ .'/Type.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class TypeCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `type`";
        return Connexion::query($rq,"Type");
	}
    
    
    public static function delete(){
        if(isset($_GET["idtype"])){
        $rq="DELETE FROM `type` WHERE idtype=:idtype";
        $tab=array("idtype"=>$_GET["idtype"]);
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
        $rq="INSERT INTO `type`(`idtype`, `lib`) VALUES (:idtype,:lib)";
        $tab= array("idtype"=>$c->getAtt('idtype'),"lib"=>$c->getAtt('lib'));
        Connexion::execute($rq,$tab);
        // if( Connexion::execute($rq,$array))
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        //var_dump(self::getAll());
        }
    
    public static function update($c){
            $rq="UPDATE `type` SET `idtype`= :idtype,`lib`=:lib WHERE idtype=:idtype";
            $tab= array("idtype"=>$c->getAtt('idtype'),"lib"=>$c->getAtt('lib'));
            Connexion::execute($rq,$tab);
            // if(Connexion::execute($rq,$array))
            // echo "update SUCESS\n";
            // else 
            // echo"update ECHEC\n";
            // var_dump(self::getAll());
        }
}
?>