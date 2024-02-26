<?php

require "composant/carteRevision.php";

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Carte</title>
        <link rel="stylesheet" href="../src/other/css/detailCarte.css">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="lib/fontawesome-free-6.2.1-web/css/all.css">
    </head>
    <body>
    <?php
    include 'composant/header.php';
?>

    <div class="container-btn-action">
        <div class="btn btn-modifier">Modifier</div>
        <div class="btn btn-supprimer">Supprimer</div>
        <div class="btn btn-dupliquer">Dupliquer</div>
    </div>
    <?php
    if (isset($carte)) {
        afficherCarte($carte);
    }
    ?>


    </body>
</html>