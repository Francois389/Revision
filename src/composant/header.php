<?php
$tab = array("accueil" => false,
        "parcourir" => false,
        "creer" => false,
        "mon_compte" => false);
if (isset($pageSelectionner)) {
    $tab[$pageSelectionner] = true;
}
?>

<link rel="stylesheet" href="../src/other/css/header.css">
    <link rel="stylesheet" href="lib/fontawesome-free-6.2.1-web/css/all.css">

<div class="entete">
    <div class="action">
        <a href="#" class="<?php if ($tab["accueil"]) {
            echo "selectionner";
        }?>">

            Accueil
        </a>
        <a href="#" class="<?php if ($tab["parcourir"]) {
            echo "selectionner";
        }?>">

            Parcourir
        </a>
        <a href="index.php?controller=CreationCarte" class="<?php if ($tab["creer"]) {
            echo "selectionner";
        }?>">
            Créer +
        </a>
    </div>
    <p class="titre">
        Revision
    </p>
    <a href="#" class="<?php if ($tab["mon_compte"]) {
        echo "selectionner";
    }?>">
        Mon compte
        <i class="fa-solid fa-user"></i>
    </a>
</div>