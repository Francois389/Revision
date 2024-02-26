<link rel="stylesheet" href="other/css/composant/caroussel.css">
<script src="other/js/caroussel.js" defer></script>

<?php
/**
 * Affiche un carrousel
 * @param $listeElement array La liste des éléments à afficher
 * @param $methodeAffichageElement string Le nom de la méthode pour afficher les éléments de la liste
 */
function afficherCarrousel(array $listeElement, string $methodeAffichageElement): void
{

    ?>
    <div class="caroussel">
        <div class="display-area">
            <div class="conteneur-carte">
                <?php
                foreach ($listeElement as $item) {
                    $methodeAffichageElement($item);

                }
                ?>
            </div>
        </div>
        <div class="dots-wrapper">
            <button class="dot active"></button>
            <?php
            for ($i = 0; $i < (count($listeElement) / 4) - 1; $i++) {
                echo '<button class="dot"></button>';
            }
            ?>
        </div>
    </div>

    <?php
}

?>