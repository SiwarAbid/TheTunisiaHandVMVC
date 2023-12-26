<?php
require_once __DIR__ .'/Client.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class ClientCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `client`";
        return Connexion::query($rq,"Client");
	}
    
    
    public static function delete(){
        if(isset($_GET["cin"])){
        $rq="DELETE FROM `client` WHERE cin=:cin";
        $tab=array("cin"=>$_GET["cin"]);
        Connexion::execute($rq,$tab);
        //var_dump($tab);
        // if ( Connexion::execute($rq,$tab))
        //     echo "SUCCES\n";
        // else
        //     echo "ECHEC \n";
            /** return  Connexion::execute($rq,$tab); **/
        }
    }

    public static function add($c){
        $rq="INSERT INTO `client`(`cin`, `nom`,`prenom`, `adr`, `motdepasse`) VALUES (:cin,:nom, :prenom, :adr, :motdepasse)";
        $array= array("cin"=>$c->getAtt('cin'),"nom"=>$c->getAtt('nom'),"prenom"=>$c->getAtt('prenom'),"adr"=>$c->getAtt('adr'),"motdepasse"=>$c->getAtt('motdepasse'));
        Connexion::execute($rq,$array);
        // if( Connexion::execute($rq,$array))
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        //var_dump(self::getAll());
        }
    
    public static function update($c){
            $rq="UPDATE `client` SET `cin`= :cin,`nom`=:nom, `prenom`=:prenom, `adr`=:adr, `motdepasse`=:motdepasse WHERE cin=:cin"; //id==cin
            $array= array("cin"=>$c->getAtt('cin'),"nom"=>$c->getAtt('nom'),"prenom"=>$c->getAtt('prenom'),"adr"=>$c->getAtt('adr'),"motdepasse"=>$c->getAtt('motdepasse'));
            Connexion::execute($rq,$array);

            // if(Connexion::execute($rq,$array))
            // echo "update SUCESS\n";
            // else 
            // echo"update ECHEC\n";
            //var_dump(self::getAll());
        }
    public function findByCin($cin){
        $rq="SELECT * FROM `client` WHERE cin=".$cin;
        $array= array("cin"=>$cin);
        Connexion::execute($rq,$array);
        

        
        $c= new Client(Connexion::query($rq,"Client"));
        //var_dump($c);
        return $c;

    }
    
    
}
?>