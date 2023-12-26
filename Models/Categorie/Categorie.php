<?php
class Categorie{

    private $idCateg;
    private $nom;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   /*  public function __construct($idCateg,$nom){
        $this->idCateg= $idCateg;
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
        return "ID Categorie: ".$this->idCateg." est ".$this->nom;
    }
}
?>