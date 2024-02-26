<?php

namespace services;

use services\Service;

class CreationCarteService implements Service
{
    private \PDO $pdo;

    public function __construct()
    {
    }

    public function setPDO(\PDO $pdo): void
    {
        $this->pdo = $pdo;
    }

    /**
     * Créer une carte de révision dans la base de données.
     * @param $titre string Le titre de la carte
     * @param $descritpion string La description de la carte
     * @param $tag string Le tag de la carte
     * @param $echeance string La date d'échéance de la carte
     * @param $importance int L'importance de la carte
     * @return bool true si la carte a été créée, false sinon
     */
    public function creationCarte(string $titre, string $descritpion, string $tag, string $echeance, int $importance): bool
    {
        $stmt = $this->pdo->prepare("INSERT INTO carte_revision(titre, description, date_echeance, importance, id_user) VALUES (:titre, :description, :echeance, :importance, :id_user)");
        $stmt->bindParam(":titre", $titre);
        $stmt->bindParam(":description", $descritpion);
        $stmt->bindParam(":echeance", $echeance);
        $stmt->bindParam(":importance", $importance);
        $stmt->bindParam(":id_user", $_SESSION["id_user"]);
        return $stmt->execute();

    }
}
