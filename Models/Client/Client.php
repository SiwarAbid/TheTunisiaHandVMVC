<?php
class Client{

    private $cin;
    private $nom;
    private $prenom;
    private $adr;
    private $motdepasse;

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
        return "CIN Client: ".$this->cin." appelé ".$this->nom." ".$this->prenom.". Son adresse: ".$this->adr." avec mot de passe: ".$this->motdepasse;
    }
}
?>