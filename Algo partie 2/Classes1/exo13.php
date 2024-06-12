<?php

class Voiture {
    private string $marque;
    private string $modele;
    private string $nbPortes; 
    private int $vitesseActuelle;
    private bool $EstDemarre;

public function __construct( string $marque, string $modele, string $nbPortes, int $vitesseActuelle = 0, bool $EstDemarre=false ) {
    $this->marque = $marque; 
    $this->modele = $modele; 
    $this->nbPortes = $nbPortes; 
    $this->vitesseActuelle = 0; 
    $this->EstDemarre = false;
    

}

// ************Accesseurs et mutateurs **********************************
    public function getMarque() : string
    {
        return $this->marque;
    }


    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }


    public function getModele() : string
    {
        return $this->modele;
    }


    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

  
    public function getNbPortes() : int
    {
        return $this->nbPortes;
    }


    public function setNbPortes($nbPortes)
    {
        $this->nbPortes = $nbPortes;

        return $this;
    }


    public function getvitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }


    public function setvitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getEstDemarre():bool
    {
        return $this->EstDemarre;
    }

    public function setEstDemarre($EstDemarre)
    {
        $this->EstDemarre = $EstDemarre;

        return $this;
    }
// *************************Les méthodes *******************************
    public function demarrer() {
       if ($this->EstDemarre ) {
            echo " Le véhicule " .$this. " est à l'arrêt <br>";

        }else {
           echo  "Le véhicule " .$this. " démarre <br>";

        }

    }

    public function accelere($vitesse) {
     
        if ($this->EstDemarre == true && $this->vitesseActuelle < $vitesse ) {
                   echo "Le véhicule" .$this. " accélère de" .$vitesse -= $vitesseActuelle. "km/h <br>";
        }else {
            echo "Pour accélerer, il faut démarrer le véhicule " .$this. " <br>";
        }

    }
    public function stopper() {
        if($this->EstDemarre=true && $this->vitesseActuelle == 0) {
            echo "Le véhicule " .$this. "est stoppé <br>";
        }else {
            echo "Le véhicule " .$this. " démarre <br>";
        }
    }

    public function ralentir($vitesse) {
         if ($this->vitesseActuelle > $vitesse) {
            echo "le véhicule" .$this. "doit ralentir de " . $vitesseActuelle -= $vitesse. "km/h <br>";
         }else {
            echo "le véhicule " .$this. "veut accélere de " .$vitesseActuelle -= $vitesse. "km/h <br>";
         }
    }
    public function getInfos() {
        return "Nom et modèle du véhicule : " .$this. "<br> Nombre de portes : " .$this->nbPortes. "<br>" .$this->demarrer(). "<br> Sa vitesse est de : " .$this->getvitesseActuelle(). " km/h";
        
    }
    public function __toString() {
        return " " .$this->marque. " ".$this->modele. " ";
    }


}


