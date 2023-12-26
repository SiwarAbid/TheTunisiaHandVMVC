<?php
class Type{

    private $idtype;
    private $lib;

    /**
     * Constructeur
     */

    public function __construct($tab=array()){
        foreach ($tab as $k => $v)
            $this->$k=$v;   
    }

   /*  public function __construct($idtype,$lib){
        $this->idtype= $idtype;
        $this->lib= $lib;
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
        return "ID Type: ".$this->idtype." est ".$this->lib;
    }
}
?>