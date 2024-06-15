<?php

class Voiture {
    private string $marque;
    private string $modele;
    private string $nbPortes; 
    private int $vitesseActuelle;
    private bool $estDemarre;

public function __construct( string $marque, string $modele, string $nbPortes, int $vitesseActuelle = 0, bool $estDemarre=false ) {
    $this->marque = $marque; 
    $this->modele = $modele; 
    $this->nbPortes = $nbPortes; 
    $this->vitesseActuelle = 0; 
    $this->estDemarre = false;
    

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


    public function getVitesseActuelle(): int
    {
        return $this->vitesseActuelle;
    }


    public function setVitesseActuelle($vitesseActuelle)
    {
        $this->vitesseActuelle = $vitesseActuelle;

        return $this;
    }

    public function getEstDemarre()
    {
         if ($this->estDemarre==true){
            return " Le véhicule " .$this->marque. " est démarré";
         

    } else {
        return"Le véhicule " .$this->marque. " est à l'arrêt";
    }
}

    public function setEstDemarre($estDemarre)
    {
        $this->estDemarre = $estDemarre;

        return $this;
    }
// *************************Les méthodes *******************************

    public function demarrer() {
        
       if ($this->estDemarre==false ) {
        $this->estDemarre=true;
            echo " Le véhicule " .$this. " démarre <br>";

        }else {
           echo  "Le véhicule " .$this. " est déja démarre <br>";

        }

    }

    public function accelere($vitesse) {
     
        if ($this->estDemarre==true) {
            $this->vitesseActuelle += $vitesse;
                   echo "Le véhicule" .$this. " accélère de " .$vitesse. " km/h <br>";
        }else {
            echo "Pour accélerer, il faut démarrer le véhicule " .$this. " <br>";
        }

    }
    public function stopper() {

        if($this->estDemarre==true) {
            $this->estDemarre=false;
            echo "Le véhicule " .$this. "est stoppé <br>";
        }else {

            echo "Pour stopper" .$this. " il faut démarrer le véhicule <br>";
        }
    }

    public function ralentir($vitesse) {
         if ($this->estDemarre) {
            $this->vitesseActuelle -= $vitesse; 
            if ($this->vitesseActuelle < 0){
                $this->vitesseActuelle=0;
            }
            echo "le véhicule" .$this. " ralenti de " .$vitesse. "km/h <br>";
         }else {
            echo "Pour ralentir, il faut démarrer le véhicule " .$this. " ";
         }
    }
    public function getInfos() {

        return "Nom et modèle du véhicule : " .$this. "<br> Nombre de portes : " .$this->nbPortes. "<br>" .$this->getEstDemarre(). "<br> Sa vitesse est de : " .$this->getVitesseActuelle(). " km/h";
        
    }
    public function __toString() {
        return " " .$this->marque. " ".$this->modele. " ";
    }


}


