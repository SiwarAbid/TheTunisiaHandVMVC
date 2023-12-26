<?php
require_once __DIR__ .'/Produit.php';
require_once __DIR__ . '/../Crud.php'; /** Probleme Chemin vers l'interface Crud */
require_once __DIR__ . '/../Connexion.php'; 
class ProduitCrud implements Crud {

    

    public static function getAll(){
        $rq="SELECT * FROM `produit`";
        return Connexion::query($rq,"Produit");
	}
    
    
    public static function delete(){
        if(isset($_GET["idProd"])){
        $rq="DELETE FROM `produit` WHERE idProd=:idProd";
        $tab=array("idProd"=>$_GET["idProd"]);
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
        $rq="INSERT INTO `produit`(`idProd`,`type`, `nom`, `img`, `stock`, `prix`, `couleur`, `categ`) VALUES (:idProd,:type, :nom ,:img, :stock, :prix ,:couleur ,:categ); ";
        $array= array("idProd"=>$c->getAtt('idProd'),"type"=>$c->getAtt('type'),"nom"=>$c->getAtt('nom') ,"img"=>$c->getAtt('img'), "stock"=>$c->getAtt('stock') ,"prix"=>$c->getAtt('prix') ,"couleur"=>$c->getAtt('couleur'), "categ"=>$c->getAtt('categ'));
        
        Connexion::execute($rq,$array);
        //var_dump($array);
        // if( Connexion::execute($rq,$array))
        // echo "SUCESS\n";
        // else 
        // echo"ECHEC\n";
        //var_dump(self::getAll());
        }
    
    public static function update($c){
            $rq="UPDATE `Produit` SET `idProd`= :idProd,`type`=:type , `nom`=:nom, `img` =:img, `stock` =:stock, `prix` :=prix, `couleur` =:couleur, `categ`=:categ WHERE idProd=:idProd";
            $array= array("idProd"=>$c->getAtt('idProd'),"type"=>$c->getAtt('type'),"nom"=>$c->getAtt('nom') ,"img"=>$c->getAtt('img'), "stock"=>$c->getAtt('stock') ,"prix"=>$c->getAtt('prix') ,"couleur"=>$c->getAtt('couleur'), "categ"=>$c->getAtt('categ'));
            Connexion::execute($rq,$array);
            // if(Connexion::execute($rq,$array))
            // echo "update SUCESS\n";
            // else 
            // echo"update ECHEC\n";
            // var_dump(self::getAll());
        }

}
?>