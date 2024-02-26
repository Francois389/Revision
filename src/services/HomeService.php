<?php

namespace services;

class HomeService implements Service
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
     * Récupère les cartes avec une échéance très proche.
     * @param int $nbCarte
     * @param int $id_user
     * @return array
     */
    public function getCarteEcheanceCourte(int $nbCarte, int $id_user): array
    {
        $requete = "SELECT *
                    FROM carte_revision
                    WHERE id_user = :id_user
                      AND date_echeance >= NOW()
                    ORDER BY date_echeance
                    LIMIT 100;";
        $stmt = $this->pdo->prepare($requete);
        $stmt->bindParam("id_user", $id_user);
        $resultat = $stmt->execute();

        return array();
    }
}