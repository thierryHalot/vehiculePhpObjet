<?php
include "Interface_Deplacement.php";
include "Vehicule.php";
include "Voiture.php";
include "Motos.php";


$voiture = new Voiture();
$voiture->setVoiture(100,60,2,10,50);



$moto = new Motos();
$moto->setMoto(200,50,6,280,20);
//$moto->rouler();


//$voiture->sePercuter($moto);

//var_dump($moto);

$testMoto = new Motos();
$testVoiture = new Voiture();

var_dump($testMoto,$testVoiture);


