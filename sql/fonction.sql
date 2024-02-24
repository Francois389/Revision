-- Création des fonction de la base de donnée

CREATE TRIGGER `ajouteDateCreation`
    BEFORE INSERT
    ON `carte_revision`
    FOR EACH ROW
    SET NEW.date_creation = NOW();
