<?php
/**
 * Renvoie la balise option selon les paramètres
 * Si l'option est sélectionnée, on ajoute l'attribut selected
 * @param string $value
 * @param string $textDisplay
 * @param bool $isSelected
 * @return string
 */
function getOption(string $value, string $textDisplay, bool $isSelected = false): string
{
    $resultat = '<option value="' . $value . '"';
    if ($isSelected) {
        $resultat .= 'selected';
    }
    $resultat .= '>' . $textDisplay . '</option>';
    return $resultat;
}


?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Création d'une carte</title>
        <link rel="stylesheet" href="other/css/creationCarte.css">

        <script src="other/js/gestionEtoile.js" defer></script>
    </head>
    <body>
    <?php
    $pageSelectionner = "creer";
include 'composant/header.php'
?>
    <div class="container">
        <form method="post" action="index.php?controller=CreationCarte">
            <div class="container-titre <?php if (!$titreInfo["valide"]) {
                echo "erreur";
            } ?>">
                <label for="titre">Titre</label>
                <input type="text" name="titre" value="<?php echo $titreInfo["valeur"] ?>"
                       placeholder="Titre de la carte">
            </div>

            <div class="container-description <?php if (!$descriptionInfo["valide"]) {
                echo "erreur";
            } ?>">
                <label for="description">Description</label>
                <textarea type="text" name="description"
                          placeholder="Description de la Carte"><?php echo $descriptionInfo["valeur"] ?></textarea>
            </div>

            <div class="container-tag <?php if (!$tagInfo["valide"]) {
                echo "erreur";
            } ?>">
                <label for="tag">Tag</label>
                <select name="tag">
                    <option value="none" disabled selected>Selectionner un tag</option>
                    <?php
                    foreach ($tabTag as $tab) {
                        echo getOption($tab["code"], $tab["nom"], $tab["code"] == $tagInfo["valeur"]);
                    }
?>
                </select>
            </div>

            <div class="container-echeance <?php if (!$echeanceInfo["valide"]) {
                echo "erreur";
            } ?>">
                <label for="echeance">&Eacute;ch&eacute;ance</label>
                <input type="date" name="echeance" value="<?php echo $echeanceInfo["valeur"] ?>">
            </div>

            <div class="container-importance <?php if (!$importanceInfo["valide"]) {
                echo "erreur";
            } ?>">
                <label for="importance">Importance</label>
                <input name="importance" value="<?php echo $importanceInfo["valeur"] ?>" id="valeur-importance" hidden>
                <div class="radio-group" id="radio-group">
                    <input type="radio" value="1">
                    <input type="radio" value="2">
                    <input type="radio" value="3">
                    <input type="radio" value="4">
                    <input type="radio" value="5">
                </div>
            </div>
            <div class="container-btn">
                <input class="btn-submit" type="submit" value="Créer">
            </div>
        </form>
    </div>

    </body>
</html>