<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours). la date courante est le 21/05/2018 et la date de naissance le 
17/01/1985 :
</p>

<h2>Résultat</h2>

<?php

$dateActuelle = new DateTime("21-05-2018");
$dateDeNaissance = new DateTime("17-01-1985");

$result = $dateActuelle->diff($dateDeNaissance);

$annee = $result->y;
$mois = $result->m;
$jours = $result->d;

echo "Age de la personne :$annee ans $mois mois $jours jours";