<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>

<h2>Résultat</h2>

<?php


class Personne{ 

    private string $_nom;
    private string $_prenom;
    private Datetime $_dateDeNaissance;

    public function __construct (string $nom, string $prenom, string $dateDeNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNaissance = new Datetime($dateDeNaissance);
    }



public function getNom(){
    return $this->_nom;
}
public function getPrenom(){
    return $this->_prenom;
}

public function getDateDeNaissance(){
    return $this->_dateDeNaissance;
}
public function calculerAge() {
    $dateDeNaissance = $this->_dateDeNaissance;
    $dateActuelle =new DateTime ();
    $age= $dateActuelle->diff($dateDeNaissance)->y;
    return $age;
}
public function __toString() {
    return " ". $this->_nom . " " . $this->_prenom . " ".$this->calculerAge(). " ans";
}
}
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

// echo $p1;

echo $p1->calculerAge();

// var_dump($p1);
 
// echo $p1->getNom() . " " . $p1->getPrenom(). " a " . $p1->calculerAge(). " ans. <br> " ;
// echo $p2->getNom() . " " . $p2->getPrenom(). " a " . $p2->calculerAge(). " ans. " ;


// définition d'une classe: une classe est un ensemble cohérent de code qui contient généralement à la fois des variables et des fonctions. Cela va nous servir de modèle pour créer des objets. un ensemble d'etat et de comportement.

// définition de Programmation orientée objet POO:  est une façon d'écrire et d'arranger son code autour de ce qu'on appelle des objets. L'idée est de grouper des parties de code qui servent à effectuer une tâche précise ensemble au sein d'objects afin d'obtenir une nouvelle organisation du code. paradigme de programmation


// définition d'un objet: un objet est une entité qui va pouvoir contenir un ensemble de fonctions et de variables. lorqu'on crée un nouvel objet on dit qu'on creé une instance de notre classe.

// definition de la méthode magique: Une méthode magique DOIT être précédée de deux underscores __ et porte un nom prédéfini (on ne peut pas l’appeler comme on veut). La méthode constructeur ou plus simplement le constructeur d’une classe est une méthode qui va être appelée (exécutée) automatiquement à chaque fois qu’on va instancier une classe. méthode native de php appeller lors d'une action particulière.

// définition de la méthode __toString(): cette méthode magique va être appelée dès que l'on va traiter un objet comme une chaine de caractères (par exemple lorqu'on tente d'écho un objet). va nous  retourner une chaine de caractère lors de l'appelle d'un objet.