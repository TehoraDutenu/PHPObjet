<?php

class Camion extends Vehicule
{

    // propriétés
    public const NOMBRE_ROUE = 6;
    private $vitesse = 0;


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

    public static function klaxon()
    {
        echo "<br/>POUËT POUËT";
    }
}
