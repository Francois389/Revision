<?php
function afficherCarte(\other\classes\Carte $carte)
{
    ?>
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