-- Création d'un jeux de donnée pour la table "utilisateur"
INSERT INTO utilisateur (nom, prenom, mdp, login)
VALUES ('Dupont', 'Jean', '1234', 'jean'),
       ('Durand', 'Paul', '1234', 'paul'),
       ('Martin', 'Jacques', '1234', 'jacques'),
       ('Leroy', 'Sophie', '1234', 'sophie'),
       ('Moreau', 'Luc', '1234', 'luc'),
       ('Lefebvre', 'Marie', '1234', 'marie'),
       ('Roux', 'Pierre', '1234', 'pierre'),
       ('Lemoine', 'Jeanne', '1234', 'jeanne'),
       ('Lecomte', 'Marie', '1234', 'marieLecompte');

-- Création d'un jeux de donnée pour la table "carte_revision"
INSERT INTO carte_revision (titre, description, date_echeance, importance, id_user)
VALUES ('Carte 1', 'Description carte 1', '2024-03-10', 1, 21),
       ('Carte 2', 'Description carte 2', '2024-04-20', 2, 21),
       ('Carte 3', 'Description carte 3', '2024-05-30', 3, 21),
       ('Carte 4', 'Description carte 4', '2024-06-10', 4, 21),
       ('Carte 5', 'Description carte 5', '2024-03-20', 5, 21),
       ('Carte 6', 'Description carte 6', '2024-04-30', 1, 20),
       ('Carte 7', 'Description carte 7', '2024-05-10', 2, 20),
       ('Carte 8', 'Description carte 8', '2024-06-20', 3, 20),
       ('Carte 9', 'Description carte 9', '2024-03-30', 4, 20),
       ('Carte 10', 'Description carte 10', '2024-04-10', 5, 20),
       ('Carte 11', 'Description carte 11', '2024-05-20', 1, 26),
       ('Carte 12', 'Description carte 12', '2024-04-10', 2, 26),
       ('Carte 13', 'Description carte 13', '2024-05-20', 3, 26),
       ('Carte 14', 'Description carte 14', '2024-06-30', 4, 26),
       ('Carte 10', 'Description carte 10', '2022-04-10', 5, 20),
       ('Carte 10', 'Description carte 10', '2022-04-10', 5, 20),
       ('Carte 10', 'Description carte 10', '2022-04-10', 5, 20);