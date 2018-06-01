<?php
class Voiture extends Vehicule {






public function __construct($resistance=200, $impact = null,$poid = null,$vitesse = null,$reservoir = null)
{

$this->resitance = $resistance;
$this->impact = $impact ;
$this->poid = $poid;
$this->vitesse = $vitesse;
$this->reservoir = $reservoir;



}

public function getResistance(){


$this->resitance;
}

public function setVoiture($resistance,$impact,$poid,$vitesse,$reservoir){

    $this->resitance = $resistance;
    $this->impact = $impact;
    $this->poid = $poid;
    $this->vitesse = $vitesse;
    $this->reservoir = $reservoir;
}
public function setResistance($resistance){


$this->resitance = $resistance;

}

    public function rouler(){

    echo "vroooooooooooommmmm";
    }

    public function freiner()
    {
        echo "haaaaaaaaaaaaaaaaaaaaaaahiiiii!!!!!";
    }

    public function sePercuter($motos)
    {
//            foreach ($motos as $cle => $value){
//
//                echo $cle."=========>".$value."\n";
//
//                if(key_exists(resitance)){
//
//                    echo "bonjour";
//                }
//            }
//            return $motos;


        $resistance = $motos->getResistance($motos);

        $motos->setResistance($resistance - 30);

        return $motos;

    }

    public function Reparer()
    {
        $this->resitance += 30;
    }


}