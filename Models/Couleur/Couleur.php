<?php
class Couleur{

    private $ref;
    private $nom;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   /*  public function __construct($ref,$nom){
        $this->ref= $ref;
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
        return "ID Couleur: ".$this->ref." est ".$this->nom;
    }
}
?>