<?php

class Voiture extends Vehicule
{

    // propriétés
    public $nbrRoue;
    private $vitesse = 0;


    /**
     * Get the value of nbrRoue
     */
    public function getNbrRoue()
    {
        return $this->nbrRoue;
    }

    /**
     * Set the value of nbrRoue
     *
     * @return  self
     */
    public function setNbrRoue($nbrRoue)
    {
        $this->nbrRoue = $nbrRoue;

        return $this;
    }

    /**
     * Get the value of vitesse
     */
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * methode accélerer
     */
    public function accelerer($valeur = 20)
    {
        $this->vitesse += $valeur;
        echo "<br/>La voiture roule à " . $this->getVitesse();
    }

    /**
     * methode freiner
     */
    public function freiner($valeur = 10)
    {
        $this->vitesse -= $valeur;
        echo "<br/>La voiture roule à " . $this->getVitesse();
    }

    # overide
    public function klaxonner()
    {
        echo "La voiture fait FTG";
    }
}
