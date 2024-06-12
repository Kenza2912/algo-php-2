<h1>POO Entreprise</h1>

<?php
// require "./classes/Entreprise.php";

spl_autoload_register(function ($class_name) {
    require './classes/' . $class_name . '.php';
});

$elanFormation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue du Rhôme","67100", "Strasbourg");
$stephane = new Employe("SMAIL", "Stéphane", "stephane@elan-formation.fr", $elanFormation);
$tf1= new Entreprise("tf1","1970-01-01", "13 rue de la Seine", "75000", "Paris");
// echo $elanFormation->getRaisonSociale(). " a été crée le " .$elanFormation->getDateCreation()->format("d.m.Y"). "et se situe à l'adresse suivante " .$elanFormation->getAdresseComplete();

// echo $elanFormation;


// echo $elanFormation->getAdresseComplete();

echo $stephane->getInfos();

$stephane->setEntreprise($tf1);
echo $stephane->getInfos();

// echo $sthephane;


