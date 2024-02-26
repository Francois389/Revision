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
    public function getCarteEcheanceCourte( int $id_user, int $nbCarte = 10): array
    {
        $requete = "SELECT *
                    FROM carte_revision
                    WHERE id_user = :id_user
                      AND date_echeance >= NOW()
                    ORDER BY date_echeance
                    LIMIT 100;";
        $stmt = $this->pdo->prepare($requete);
        $stmt->bindParam("id_user", $id_user);
        $stmt->execute();

        $cartes = array();
        while ($row = $stmt->fetch()) {
            $cartes[] = $row;
        }
        $stmt->closeCursor();

        return $cartes;
    }

    public function getCarteAleatoire(int $id_user, int $nbCarte = 10): array
    {
        $requete = "SELECT DISTINCT *
                    FROM carte_revision
                    WHERE id_user = :id_user
                    ORDER BY RAND()
                    LIMIT :nbCarte;";
        $stmt = $this->pdo->prepare($requete);
        $stmt->bindParam("id_user", $id_user);
        $stmt->bindParam("nbCarte", $nbCarte);
        $stmt->execute();

        $cartes = array();
        while ($row = $stmt->fetch()) {
            $cartes[] = $row;
        }
        $stmt->closeCursor();

        return $cartes;
    }
}