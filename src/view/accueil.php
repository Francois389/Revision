<?php
include "composant/carrousel.php";
include "composant/carteRevision.php";


?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Spectacle</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="other/css/accueil.css">

    </head>
    <body>
    <?php
    $pageSelectionner = "accueil";
    include 'composant/header.php'
    ?>

    <div class="app">
        <div class="conteneur-section">
            <div class="titre-section">
                Ech&eacute;ance courte
            </div>
            <!-- TOOD faire un caroussel -->
            <?php
            afficherCarrousel($carteEcheanceCourte, 'afficherCarte');
            ?>
        </div>
        <div class="conteneur-section">
            <div class="titre-section">
                Carte al&eacute;atoire
            </div>
            <!-- TOOD faire un caroussel -->
            <?php
            afficherCarrousel($carteAleatoire, 'afficherCarte');
            ?>
        </div>
    </div>


    </body>
</html>