<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Création d'une carte</title>
        <link rel="stylesheet" href="other/css/creationCarte.css">
    </head>
    <body>
    <?php
    $pageSelectionner = "creer";
    include 'composant/header.php'
    ?>
    <div class="container">
        <form>
            <div class="container-titre">
                <label for="titre">Titre</label>
                <input type="text" name="titre" value="" placeholder="Titre de la carte">
            </div>

            <div class="container-description">
                <label for="description">Description</label>
                <textarea type="text" name="description" placeholder="Description de la Carte"></textarea>
            </div>

            <div class="container-tag">
                <label for="tag">Tag</label>
                <select>
                    <option disabled selected>Selectionner un tag</option>
                    <option value="controle">Contrôle</option>
                    <option value="exercice">Exercice</option>
                </select>
            </div>

            <div class="container-echeance">
                <label for="echeance">&Eacute;ch&eacute;ance</label>
                <input type="date" name="echeance" value="">
            </div>

            <div class="container-importance">
                <label for="importance">Importance</label>
                <div class="radio-group">
                    <input type="radio" id="importance-1">
                    <input type="radio" id="importance-2">
                    <input type="radio" id="importance-3">
                    <input type="radio" id="importance-4">
                    <input type="radio" id="importance-5">
                </div>
            </div>
        </form>
    </div>

    </body>
</html>