<?php

/**
 * Retourne le nombre d'étoiles en fonction de l'importance
 * @param $importance L'importance de la carte
 * @param $importance_max L'importance maximale
 * @return string
 */
function getStar($importance, $importance_max): string
{
    $star = '';
    for ($i = $importance; $i < $importance_max; $i++) {
        $star .= '<i class="fas fa-star"></i>'; // Etoile pleine
    }
    for ($i = 0; $i < $importance; $i++) {
        $star .= '<i class="far fa-star"></i>'; // Etoile creuse
    }
    return $star;
}

function afficherCarte(\other\classes\Carte $carte): void
{
    ?>
    <link rel="stylesheet" href="../src/other/css/composant/carteRevision.css">
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
    <?php
}