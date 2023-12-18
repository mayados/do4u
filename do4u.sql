SET AUTOCOMMIT = 0;
START TRANSACTION;

-- Base de données : do4u
--
DROP DATABASE
    IF EXISTS do4u;
CREATE DATABASE do4u
    DEFAULT CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;
USE do4u;


-- Structure de la table Utilisateur

DROP TABLE IF EXISTS Utilisateur;
CREATE TABLE Utilisateur (
    idUtilisateur INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,    
    nomUtilisateur VARCHAR(100) NOT NULL,
    prenomUtilisateur VARCHAR(50) NOT NULL,
    villeUtilisateur VARCHAR(50) NOT NULL,
    codePostalUtilisateur VARCHAR(5) NOT NULL,
    dateInscription DATE NOT NULL,
    motDePasse VARCHAR(30) NOT NULL,
    estBanni BOOLEAN,
    latitude VARCHAR(10) DEFAULT NULL,
    longitude VARCHAR(10) DEFAULT NULL,
    PRIMARY KEY (idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Contenu de la table Utilisateur


-- Structure de la table Role
DROP TABLE IF EXISTS Role;
CREATE TABLE Role (
    idRole INT  UNSIGNED NOT NULL AUTO_INCREMENT,
    nomRole VARCHAR(30) NOT NULL,
    PRIMARY KEY (idRole)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Role


-- Structure de la table AvoirPourRole
--
DROP TABLE IF EXISTS AvoirPourRole;
CREATE TABLE AvoirPourRole (
    utilisateurId INT UNSIGNED,
    roleId INT UNSIGNED,
    KEY utilisateurId (utilisateurId),
    KEY roleId (roleId),
    PRIMARY KEY (utilisateurId,roleId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table AvoirPourRole

-- Structure de la table Entreprise
--
DROP TABLE IF EXISTS Entreprise;
CREATE TABLE Entreprise (
    idEntreprise INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nomEntreprise VARCHAR(50) NOT NULL,
    utilisateurId INT UNSIGNED,
    PRIMARY KEY (idEntreprise),
    KEY utilisateurId (utilisateurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Contenu de la table Entreprise

-- Structure de la table AutoEntrepreneur
--
DROP TABLE IF EXISTS AutoEntrepreneur;
CREATE TABLE AutoEntrepreneur (
    idAutoEntrepreneur INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateurId INT UNSIGNED,
    PRIMARY KEY (idAutoEntrepreneur),
    KEY utilisateurId (utilisateurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table AutoEntrepreneur

-- Structure de la table Particulier
--
DROP TABLE IF EXISTS Particulier;
CREATE TABLE Particulier (
    idParticulier INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateurId INT UNSIGNED,
    PRIMARY KEY (idParticulier),
    KEY utilisateurId (utilisateurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Particulier


-- Structure de la table Avis
--
DROP TABLE IF EXISTS Avis;
CREATE TABLE Avis (
    idAvis INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombreEtoiles INT  NOT NULL DEFAULT 0,
    texte TEXT DEFAULT NULL,
    destinataireId INT UNSIGNED,
    redacteurId INT UNSIGNED,
    PRIMARY KEY (idAvis),
    KEY destinataireId (destinataireId),
    KEY redacteurId (redacteurId) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Avis

-- Structure de la table Categorie
--
DROP TABLE IF EXISTS Categorie;
CREATE TABLE Categorie (
    idCategorie INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombreEtoiles INT  NOT NULL DEFAULT 0,
    nomCategorie VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY (idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Categorie

-- Structure de la table TypeAnnonce
--
DROP TABLE IF EXISTS TypeAnnonce;
CREATE TABLE TypeAnnonce (
    idTypeAnnonce INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nomTypeAnnonce VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY (idTypeAnnonce)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table TypeAnnonce

-- Structure de la table Annonce
--
DROP TABLE IF EXISTS Annonce;
CREATE TABLE Annonce (
    idAnnonce INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titre VARCHAR(50) NOT NULL,
    datePublication DATETIME NOT NULL,
    photo VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    ville VARCHAR(50) NOT NULL,
    codePostal VARCHAR(5) NOT NULL,
    latitude VARCHAR(10) NOT NULL,
    longitude VARCHAR(10) NOT NULL,
    createurId INT UNSIGNED,
    typeAnnonceId INT UNSIGNED,
    categorieId INT UNSIGNED,
    PRIMARY KEY (idAnnonce),
    KEY createurId (createurId),
    KEY typeAnnonceId (typeAnnonceId),
    KEY categorieId (categorieId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Annonce

-- Structure de la table Favoris
--
DROP TABLE IF EXISTS Favoris;
CREATE TABLE Favoris (
    utilisateurId INT UNSIGNED,
    annonceId INT UNSIGNED,
    PRIMARY KEY (utilisateurId,annonceId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Favoris


-- Structure de la table Conversation
--
DROP TABLE IF EXISTS Conversation;
CREATE TABLE Conversation (
    idConversation INT UNSIGNED NOT NULL AUTO_INCREMENT,
    conversationSupprimeeInitiateur BOOLEAN,
    conversationSupprimeeContact BOOLEAN,
    annonceId INT UNSIGNED,
    initiateurId INT UNSIGNED,
    PRIMARY KEY (idConversation)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Conversation


-- Structure de la table Participer
--
DROP TABLE IF EXISTS Participer;
CREATE TABLE Participer (
    participantId INT UNSIGNED,
    conversationId INT UNSIGNED,
    KEY participantId (participantId),
    KEY conversationId (conversationId),
    PRIMARY KEY (participantId,conversationId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Participer


-- Structure de la table Message
--
DROP TABLE IF EXISTS Message;
CREATE TABLE Message (
    idMessage INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dateCreation DATETIME NOT NULL,
    texte TEXT NOT NULL,
    estLu BOOLEAN,
    expediteurId INT UNSIGNED,
    conversationId INT UNSIGNED,
    PRIMARY KEY (idMessage),
    FOREIGN KEY (expediteurId) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (conversationId) REFERENCES Conversation(idConversation)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Message



DROP TABLE IF EXISTS Signalement;
CREATE TABLE Signalement (
    idSignalement INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dateSignalement DATETIME NOT NULL,
    motif VARCHAR(255) NOT NULL,
    commentaire TEXT NOT NULL,
    messageId INT UNSIGNED,
    avisId INT UNSIGNED,
    annonceId INT UNSIGNED,
    utilisateurId INT UNSIGNED,
    signaleurId INT UNSIGNED,
    PRIMARY KEY (idSignalement),
    KEY avisId (avisId),
    KEY messageId (messageId),
    KEY annonceId (annonceId),
    KEY utilisateurId (utilisateurId),
    KEY signaeurId (signaleurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Signalement


-- Structure de la table Suivre
--
DROP TABLE IF EXISTS Suivre;
CREATE TABLE Suivre (
    suiviId INT UNSIGNED,
    abonneId INT UNSIGNED,
    PRIMARY KEY (suiviId,abonneId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- Contraintes des différentes tables
ALTER TABLE AvoirPourRole
    ADD CONSTRAINT fk_avoirpourrole_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT roleId FOREIGN KEY (roleId) REFERENCES Role(idRole);

ALTER TABLE Entreprise
    ADD CONSTRAINT fk_entreprise_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE AutoEntrepreneur
    ADD CONSTRAINT fk_autoentrepreneur_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE Particulier
    ADD CONSTRAINT fk_particulier_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE Avis
    ADD CONSTRAINT destinataireId FOREIGN KEY (destinataireId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT redacteurId FOREIGN KEY (redacteurId) REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE Annonce
    ADD CONSTRAINT createurId FOREIGN KEY (createurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT typeAnnonceId FOREIGN KEY (typeAnnonceId) REFERENCES TypeAnnonce(idTypeAnnonce),
    ADD CONSTRAINT categorieId FOREIGN KEY (categorieId) REFERENCES Categorie(idCategorie) ON DELETE CASCADE;

ALTER TABLE Favoris
    ADD CONSTRAINT fk_favoris_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT fk_favoris_annonceid FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce) ON DELETE CASCADE;

ALTER TABLE Conversation
    ADD CONSTRAINT fk_conversation_annonceid FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce),
    ADD CONSTRAINT fk_conversation_initiateurid FOREIGN KEY (initiateurId) REFERENCES Utilisateur(idUtilisateur);

ALTER TABLE Participer
    ADD CONSTRAINT participantId FOREIGN KEY (participantId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT conversationId FOREIGN KEY (conversationId) REFERENCES Conversation(idConversation);

ALTER TABLE Signalement
    ADD CONSTRAINT avisId FOREIGN KEY (avisId) REFERENCES Avis(idAvis),
    ADD CONSTRAINT messageId FOREIGN KEY (messageId) REFERENCES Message(idMessage),
    ADD CONSTRAINT annonceId FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce),
    ADD CONSTRAINT utilisateurId FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT signaleurId FOREIGN KEY (signaleurId) REFERENCES Utilisateur(idUtilisateur);


ALTER TABLE Suivre
    ADD CONSTRAINT fk_suivre_suiviid FOREIGN KEY (suiviId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT fk_suivre_abonneid FOREIGN KEY (abonneId) REFERENCES Utilisateur(idUtilisateur);

COMMIT;
SET AUTOCOMMIT = 1;
