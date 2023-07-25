<?php
require 'classes/Voiture.php';
require 'classes/Camion.php';
require 'classes/Vehicule.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>PO0</h2>
    </header>

    <?php
    $mercedes = new Voiture(4);
    $mercedes->setModel("classe A")
        ->setCouleur("carmin")
        ->setMarque("Mercedes-Benz");

    echo "<br/>Cette voiture a " . Voiture::NBR_RETRO . " retroviseurs";
    // $mercedes->nbrRoue = 4; // affecte une valeur à la propriété
    // $mercedes->model = 'classe A';
    // $mercedes->couleur = 'noir';
    echo $mercedes->nbrRoue; // affiche la valeur
    echo "<br/>La couleur est " . $mercedes->getCouleur();
    echo "<br/> Le modèle est => " . $mercedes->getModel();

    echo "<br/>Vitesse actuelle de la voiture => " . $mercedes->getVitesse();

    $mercedes->accelerer(40);
    $mercedes->freiner(10);

    echo "<br/>Vitesse actuelle de la voiture => " . $mercedes->getVitesse();

    // echo $mercedes->toString();

    echo "Nombre de roues du camion => " . Camion::NOMBRE_ROUE;

    Camion::klaxon();

    $renault = new Camion();
    $renault->setModel("gros camion qui fait pouët")->setCouleur("verte");
    echo "<br/>Mon " . $renault->getModel() . " est de couleur " . $renault->getCouleur();

    ?>

</body>

</html>