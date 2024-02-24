CREATE DATABASE IF NOT EXISTS revision DEFAULT CHARACTER SET utf8mb4;
USE revision;

-- Creation d'un utilisateur
CREATE TABLE IF NOT EXISTS utilisateur (
    id_user int(6) NOT NULL AUTO_INCREMENT,
    nom varchar(40) NOT NULL COMMENT 'le nom de l\'utilisateur',
    prenom varchar(40) NOT NULL COMMENT 'le prenom de l\'utilisateur',
    mdp varchar(64) NOT NULL COMMENT 'le mot de passe de l\'utilisateur qui sera chiffré' ,
    login varchar(64) not null  UNIQUE COMMENT 'l\'identifiant de connexion',
    PRIMARY KEY (id_user)
);

-- Creation d'une carte de révision
CREATE TABLE IF NOT EXISTS carte_revision (
    id_carte int(8) NOT NULL AUTO_INCREMENT,
    titre varchar(50) NOT NULL,
    description varchar(1000),
    date_echeance date NOT NULL COMMENT 'La date du contrôle, de l\'exercice, ... ',
    date_creation date COMMENT 'la date de creation de la carte. Elle est créer automatiquement à la création de la carte',
    importance int(1) NOT NULL DEFAULT 1 COMMENT 'l\'importance de la révision de 1 à 5' CHECK ( 1 <= carte_revision.importance AND carte_revision.importance <= 5),
    id_user int(6) NOT NULL COMMENT 'l\'id de l\'utilisateur qui a créé la carte',
    PRIMARY KEY (id_carte),
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user)
)