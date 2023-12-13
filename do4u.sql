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
    idUtilisateur INT(11) NOT NULL AUTO_INCREMENT,
    nomUtilisateur VARCHAR(50) NOT NULL,
    prenomUtilisateur VARCHAR(30) NOT NULL,
    villeUtilisateur VARCHAR(50) NOT NULL,
    codePostalUtilisateur VARCHAR(10) NOT NULL,
    roleUtilisateur VARCHAR(50) NOT NULL,
    dateInscription DATE NOT NULL,
    motDePasse VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    isBanned BOOLEAN,
    latitude VARCHAR(30) DEFAULT NULL,
    longitude VARCHAR(30) DEFAULT NULL,
    PRIMARY KEY (idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Contenu de la table Utilisateur

-- Structure de la table Entreprise
--
DROP TABLE IF EXISTS Entreprise;
CREATE TABLE Entreprise (
    idEntreprise INT(11) NOT NULL AUTO_INCREMENT,
    nomEntreprise VARCHAR(50) NOT NULL,
    utilisateur_id INT,
    PRIMARY KEY (idEntreprise),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Contenu de la table Entreprise

-- Structure de la table AutoEntrepreneur
--
DROP TABLE IF EXISTS AutoEntrepreneur;
CREATE TABLE AutoEntrepreneur (
    idAutoEntrepreneur INT(11) NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateur_id INT,
    PRIMARY KEY (idAutoEntrepreneur),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table AutoEntrepreneur

-- Structure de la table Particulier
--
DROP TABLE IF EXISTS Particulier;
CREATE TABLE Particulier (
    idParticulier INT(11) NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateur_id INT,
    PRIMARY KEY (idParticulier),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Particulier


-- Structure de la table Avis
--
DROP TABLE IF EXISTS Avis;
CREATE TABLE Avis (
    idAvis INT(11) NOT NULL AUTO_INCREMENT,
    nombreEtoiles INT(11) NOT NULL DEFAULT 0,
    texte TEXT DEFAULT NULL,
    emetteur INT,
    recepteur INT,
    PRIMARY KEY (idAvis),
    FOREIGN KEY (emetteur) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (recepteur) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Avis

-- Structure de la table Categorie
--
DROP TABLE IF EXISTS Categorie;
CREATE TABLE Categorie (
    idCategorie INT(11) NOT NULL AUTO_INCREMENT,
    nombreEtoiles INT(11) NOT NULL DEFAULT 0,
    nomCategorie VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY (idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Categorie

-- Structure de la table TypeAnnonce
--
DROP TABLE IF EXISTS TypeAnnonce;
CREATE TABLE TypeAnnonce (
    idTypeAnnonce INT(11) NOT NULL AUTO_INCREMENT,
    nomTypeAnnonce VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY (idTypeAnnonce)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table TypeAnnonce

-- Structure de la table Annonce
--
DROP TABLE IF EXISTS Annonce;
CREATE TABLE Annonce (
    idAnnonce INT(11) NOT NULL AUTO_INCREMENT,
    titre VARCHAR(50) NOT NULL,
    datePublication VARCHAR(50) NOT NULL,
    photo VARCHAR(50) NOT NULL,
    ville VARCHAR(50) NOT NULL,
    codePostal VARCHAR(50) NOT NULL,
    latitude VARCHAR(50) NOT NULL,
    longitude VARCHAR(50) NOT NULL,
    createur INT,
    typeAnnonce INT,
    categorie_id INT,
    PRIMARY KEY (idAnnonce),
    FOREIGN KEY (createur) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (typeAnnonce) REFERENCES TypeAnnonce(idTypeAnnonce),
    FOREIGN KEY (categorie_id) REFERENCES Categorie(idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Annonce

-- Structure de la table Favoris
--
DROP TABLE IF EXISTS Favoris;
CREATE TABLE Favoris (
    utilisateur_id INT,
    annonce_id INT,
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (annonce_id) REFERENCES Annonce(idAnnonce),
    PRIMARY KEY (utilisateur_id,annonce_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Favoris


-- Structure de la table Conversation
--
DROP TABLE IF EXISTS Conversation;
CREATE TABLE Conversation (
    idConversation INT(11) NOT NULL AUTO_INCREMENT,
    conversationSupprimeeInitiateur BOOLEAN,
    conversationSupprimeeContact BOOLEAN,
    annonce_id INT,
    initiateur_id INT,
    PRIMARY KEY (idConversation),
    FOREIGN KEY (annonce_id) REFERENCES Annonce(idAnnonce),
    FOREIGN KEY (initiateur_id) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Conversation


-- Structure de la table Participer
--
DROP TABLE IF EXISTS Participer;
CREATE TABLE Participer (
    participant_id INT,
    conversation_id INT,
    FOREIGN KEY (participant_id) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (conversation_id) REFERENCES Conversation(idConversation),
    PRIMARY KEY (participant_id,conversation_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Participer


-- Structure de la table Message
--
DROP TABLE IF EXISTS Message;
CREATE TABLE Message (
    idMessage INT(11) NOT NULL AUTO_INCREMENT,
    dateCreation DATETIME NOT NULL,
    texte TEXT NOT NULL,
    isRead BOOLEAN,
    emetteur_id INT,
    conversation_id INT,
    PRIMARY KEY (idMessage),
    FOREIGN KEY (emetteur_id) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (conversation_id) REFERENCES Conversation(idConversation)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Message



DROP TABLE IF EXISTS Signalement;
CREATE TABLE Signalement (
    idSignalement INT(11) NOT NULL AUTO_INCREMENT,
    dateSignalement DATETIME NOT NULL,
    motif VARCHAR(150) NOT NULL,
    commentaire TEXT NOT NULL,
    isTreated BOOLEAN,
    typeEntiteSignalee VARCHAR(50) NOT NULL,
    avis_id INT,
    conversation_id INT,
    annonce_id INT,
    utilisateur_id INT,
    signaleur_id INT,
    PRIMARY KEY (idSignalement),
    FOREIGN KEY (avis_id) REFERENCES Avis(idAvis),
    FOREIGN KEY (conversation_id) REFERENCES Conversation(idConversation),
    FOREIGN KEY (annonce_id) REFERENCES Annonce(idAnnonce),
    FOREIGN KEY (utilisateur_id) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (signaleur_id) REFERENCES Utilisateur(idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Signalement


-- Structure de la table Suivre
--
DROP TABLE IF EXISTS Suivre;
CREATE TABLE Suivre (
    suivi_id INT,
    abonne_id INT,
    FOREIGN KEY (suivi_id) REFERENCES Utilisateur(idUtilisateur),
    FOREIGN KEY (abonne_id) REFERENCES Utilisateur(idUtilisateur),
    PRIMARY KEY (suivi_id,abonne_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Signalement


COMMIT;
SET AUTOCOMMIT = 1;
