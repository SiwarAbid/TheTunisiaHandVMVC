<?php
class Produit{

    private $idProd;
    private $type;
    private $nom;
    private $img;
    private $stock;
    private $prix;
    private $couleur;
    private $categ;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   /*  public function __construct($idProd,$nom){
        $this->idProd= $idProd;
        $this->nom= $nom;
    } */

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
        return "ID Produit: ".$this->idProd." est ".$this->nom." de type ".$this->type." stock ".$this->stock." prix ".$this->prix;
    }
}
?>