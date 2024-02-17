<?php

namespace controllers;

use services\Service;
use yasmf\View;

class CreationCarteController implements Controller
{
    private Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function index(): View
    {
        $titre = ["valide" => false, "valeur" => ""];
        $descritpion = ["valide" => false, "valeur" => ""];
        $tag = ["valide" => false, "valeur" => ""];
        $echeance = ["valide" => false, "valeur" => ""];
        $importance = ["valide" => false, "valeur" => ""];

        $this->validationTitre($titre);
        $this->validationDescription($descritpion);
        $this->validationTag($tag);
        $this->validationEcheance($echeance);
        $this->validationImportance($importance);

        $tabTag = [["nom"=>"Contrôle", "code"=>"controle"],["nom" => "Exercice", "code"=>"exercice"]];

        $view = new View("creationCarte");
        $view->setVar("titreInfo", $titre);
        $view->setVar("descriptionInfo", $descritpion);
        $view->setVar("tagInfo", $tag);
        $view->setVar("echeanceInfo", $echeance);
        $view->setVar("importanceInfo", $importance);
        $view->setVar("tabTag", $tabTag);
        return $view;
    }

    public function validationTitre(array &$titre): void
    {
        if (isset($_POST["titre"])) {
            $titre["valeur"] = htmlentities($_POST["titre"]);
            if (!empty($titre["valeur"]) && strlen($titre["valeur"]) <= 32) {
                $titre["valide"] = true;
            }
        }
    }

    public function validationDescription(array &$description): void
    {
        if (isset($_POST["description"])) {
            $description["valeur"] = htmlentities($_POST["description"]);

            if (!empty($description["valeur"])) {
                $description["valide"] = true;
            }
        }
    }

    public function validationTag(array &$tag): void
    {
        if (isset($_POST["tag"])) {
            $tag["valeur"] = htmlentities($_POST["tag"]);
            if (!empty($tag["valeur"]) && $tag["valeur"] != "none") {
                $tag["valide"] = true;
            }
        }
    }

    public function validationEcheance(array &$echeance): void
    {
        if (isset($_POST["echeance"])) {
            $echeance["valeur"] = htmlentities($_POST["echeance"]);
            if (!empty($echeance["valeur"])) {
                $echeance["valide"] = true;
            }
        }
    }

    public function validationImportance(array &$importance): void
    {
        if (isset($_POST["importance"])) {
            $importance["valeur"] = htmlentities($_POST["importance"]);
            if (!empty($importance["valeur"]) && 0 < $importance["valeur"] && $importance["valeur"] <= 5) {
                $importance["valide"] = true;
            }
        }
    }
}