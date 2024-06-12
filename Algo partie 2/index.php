<h1>Exercice 13</h1>

<?php
require "./classes1/exo13.php";

// spl_autoload_register(function ($class_name) {
//     require './Classes1/' . $class_name . '.php';
// });



$v1 = new Voiture("Peugeot", "408", "5");
$v2 = new Voiture("Citroen", "C4", "3");



echo $v1->demarrer();
$v1->setEstDemarre() ;
echo $v1->accelere(50);

// echo $v1->accelere(60);
// $v1->setvitesseActuelle(50);
// echo $v1->getInfos();


// echo $v1->stopper();t