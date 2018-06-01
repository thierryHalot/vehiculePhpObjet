<?php
class Motos extends Vehicule {




    public function __construct($resistance = 150,$impact = null,$poid = null,$vitesse = null,$reservoir = null)
    {

        $this->resitance = $resistance;
        $this->impact = $impact ;
        $this->poid = $poid;
        $this->vitesse = $vitesse;
        $this->reservoir = $reservoir;



    }

    public function getResistance(){


        return $this->resitance;


    }

    public function setResistance($resistance){

        $this->resitance = $resistance;
    }

    public function setMoto($resistance,$impact,$poid,$vitesse,$reservoir){

        $this->resitance = $resistance;
        $this->impact = $impact;
        $this->poid = $poid;
        $this->vitesse = $vitesse;
        $this->reservoir = $reservoir;
    }


    public function rouler(){

        echo "vrammmmmmmmmmmmmmmmmm";
    }

    public function freiner() {
 // TODO: Implement freiner() method.
}
    public function sePercuter($a) {
        $this->resitance -= 30;
}
    public function Reparer() {
     // TODO: Implement Reparer() method.
    }

}