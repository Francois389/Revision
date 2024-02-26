<?php

/**
 * Retourne le nombre d'étoile en fonction de l'importance
 * @param $importance L'importance de la carte
 * @param $importance_max L'importance maximale
 * @return string
 */
function getStar($importance, $importance_max): string
{
    $star = '';
    for ($i = $importance; $i < $importance_max; $i++) {
        $star .= '<i class="far fa-star"></i>';
    }
    for ($i = 0; $i < $importance; $i++) {
        $star .= '<i class="fas fa-star"></i>';
    }
    return $star;
}

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
    <div class="carte">
        <div class="titre-tag">
            <div><?php echo $carte->getTitre() ?></div>
            <div><?php echo $carte->getTag() ?></div>
        </div>
        <div class="description">
            <div><?php echo $carte->getDescription() ?></div>
        </div>
        <div class="container-date-echeance-creation">
            <div class="container-date-echeance">
                <div><i class="fa-solid fa-clock-rotate-left"></i>&Eacute;ch&eacute;ance</div>
                <div class="date-echeance"><?php echo $carte->getEcheance() ?></div>
            </div>
            <div class="container-date-creation">
                <div><i class="fa-regular fa-clock"></i>Cr&eacute;ation</div>
                <div class="date-creation"><?php echo $carte->getDateCreation() ?></div>
            </div>
        </div>
        <div class="container-importance">
            <div>Importance</div>
            <div><?php echo getStar($carte->getImportance(), 5); ?></div>
        </div>
    </div>


    </body>
</html>