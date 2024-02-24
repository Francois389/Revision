-- Creation des utilisateur de la BD avec des permissions

-- Utilisateur "createCarte" avec les droits de création sur la table "carte_revision"
CREATE USER 'createCarte'@'localhost' IDENTIFIED BY '8bb3d';
GRANT INSERT ON `revision`.'carte_revision' TO 'createCarte'@'localhost';
