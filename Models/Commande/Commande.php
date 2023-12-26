<?php
class Commande{

    private $idCom;
    private $prixT;
    private $qte;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   

    /**
     * GETTER SETTER
     */

    
    public function getAtt($att){
        return $this->$att;
    }

    public function setAtt($att,$v){
        $this->$att=$v;
    }

    /**
     * ToString()
     */
    public function toString(){
        return "ID Commande: ".$this->idCom." Prix Total ".$this->prixT."QTE :".$this->qte;
    }
}
?>