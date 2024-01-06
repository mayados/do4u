-- Active: 1704538456592@@127.0.0.1@3306@do4u
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
    description TEXT DEFAULT NULL,
    photo VARCHAR(255) NOT NULL,
    villeUtilisateur VARCHAR(50) NOT NULL,
    codePostalUtilisateur VARCHAR(5) NOT NULL,
    dateInscription DATE NOT NULL,
    motDePasse VARCHAR(30) NOT NULL,
    estBanni BOOLEAN,
    latitude VARCHAR(10) DEFAULT NULL,
    longitude VARCHAR(10) DEFAULT NULL,
    UNIQUE(email),
    PRIMARY KEY (idUtilisateur)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Contenu de la table Utilisateur
INSERT INTO Utilisateur (idUtilisateur, email, nomUtilisateur, prenomUtilisateur,description,photo, villeUtilisateur, codePostalUtilisateur, dateInscription, motDePasse, estBanni, latitude,longitude) VALUES
    (1, 'johndoe@gmail.com', 'Doe', 'John', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Paris', '75001', '2023-01-01', 'motdepasse1', 0, 48.8566, 2.3522),
    (2, 'jane.smith@gmail.com', 'Smith', 'Jane', "Aimable, intentionnée et ayant plus de 3 ans d'expérience dans le domaine de l'aide à domicile', je vous propose mes services",'monimage.jpg','Lyon', '69001', '2023-02-01', 'motdepasse2', 1, 45.75, 4.85),
    (3, 'johnsonb@gmail.com', 'Johnson', 'Bob',"Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la plomberie, je vous propose mes services",'monimage.jpg' ,'Marseille', '13001', '2023-03-01', 'motdepasse3', 0, 43.2965, 5.3698),
    (4, 'alicebrwn@gmail.com', 'Brown', 'Alice',"Sérieuse, aimable et ayant plus de 3 ans d'expérience dans le domaine de l'animation', je vous propose mes services",'monimage.jpg' ,'Toulouse', '31000', '2023-04-01', 'motdepasse4', 0, 43.6045, 1.4442),
    (5, 'leetom@gmail.com', 'Lee', 'Tom', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Nice', '06000', '2023-05-01', 'motdepasse5', 1, 43.7102, 7.2620),
    (6, 'kims@gmail.com', 'Kim', 'Sara', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Bordeaux', '33000', '2023-06-01', 'motdepasse6', 0, 44.8378, -0.5792),
    (7, 'garcia.c@gmail.com', 'Garcia', 'Carlos', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Lille', '59000', '2023-07-01', 'motdepasse7', 0, 50.6292, 3.0573),
    (8, 'martinez.lna@gmail.com', 'Martinez', 'Elena', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Nantes', '44000', '2023-08-01', 'motdepasse8', 1, 47.2184, -1.5536),
    (9, 'raul@gmail.com', 'Lopez', 'Raul', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Strasbourg', '67000', '2023-09-01', 'motdepasse9', 0, 48.5734, 7.7521),
    (10, 'liwang@gmail.com', 'Wang', 'Li', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Rennes', '35000', '2023-10-01', 'motdepasse10', 1, 48.1173, -1.6778),
    (11, 'soso@gmail.com', 'Dubois', 'Sophie', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Montpellier', '34000', '2023-11-01', 'motdepasse11', 0, 43.6116, 3.8770),
    (12, 'fischer.mrc@gmail.com', 'Fischer', 'Mark', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Nancy', '54000', '2023-12-01', 'motdepasse12', 0, 48.6921, 6.1844),
    (13, 'wuhui@gmail.com', 'Wu', 'Hui', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Metz', '57000', '2024-01-01', 'motdepasse13', 1, 49.1193, 6.1755),
    (14, 'emmabkr@gmail.com', 'Baker', 'Emma', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Dijon', '21000', '2024-02-01', 'motdepasse14', 0, 47.3220, 5.0415),
    (15, 'minhie@gmail.com', 'Nguyen', 'Minh', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Grenoble', '38000', '2024-03-01', 'motdepasse15', 0, 45.1885, 5.7245),
    (16, 'chn@gmail.com', 'Cohen', 'David', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Angers', '49000', '2024-04-01', 'motdepasse16', 1, 47.4784, -0.5632),
    (17, 'olivia?collins@gmail.com', 'Collins', 'Olivia', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Avignon', '84000', '2024-05-01', 'motdepasse17', 0, 43.9493, 4.8055),
    (18, 'lukasmlr@gmail.com', 'Müller', 'Lukas', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Caen', '14000', '2024-06-01', 'motdepasse18', 0, 49.1829, -0.3707),
    (19, 'yanchen@gmail.com', 'Chen', 'Yan', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Amiens', '80000', '2024-07-01', 'motdepasse19', 1, 49.8941, 2.3028),
    (20, 'gonzam@gmail.com', 'Gonzalez', 'Maria', "Aimable, intentionné et ayant plus de 3 ans d'expérience dans le domaine de la construction, je vous propose mes services",'monimage.jpg','Limoges', '87000', '2024-08-01', 'motdepasse20', 0, 45.8336, 1.2620);

-- Structure de la table Role
DROP TABLE IF EXISTS Role;
CREATE TABLE Role (
    idRole INT  UNSIGNED NOT NULL AUTO_INCREMENT,
    nomRole VARCHAR(30) NOT NULL,
    PRIMARY KEY (idRole)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Role
INSERT INTO Role (idRole,nomRole) VALUES
    (1,"ROLE_ADMIN"),
    (2, "ROLE_USER");

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
INSERT INTO AvoirPourRole (utilisateurId, roleId) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2);


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
INSERT INTO Entreprise (idEntreprise, nomEntreprise, utilisateurId)
VALUES
(1,'PropEclair',15),
(2,'TrainUrSelf',8),
(3,'Un ami pour mon chien',13),
(4,"Bati'confort",20);



-- Structure de la table AutoEntrepreneur
--
DROP TABLE IF EXISTS AutoEntrepreneur;
CREATE TABLE AutoEntrepreneur (
    idAutoEntrepreneur INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateurId INT UNSIGNED,
    UNIQUE(pseudo),
    PRIMARY KEY (idAutoEntrepreneur),
    KEY utilisateurId (utilisateurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table AutoEntrepreneur
INSERT INTO AutoEntrepreneur (idAutoEntrepreneur, pseudo, utilisateurId)
VALUES
(1,'littleWolrd',6),
(2,'brodetoile',5),
(3,'bijounours',4),
(4,'lumiereetvous',3);



-- Structure de la table Particulier
--
DROP TABLE IF EXISTS Particulier;
CREATE TABLE Particulier (
    idParticulier INT UNSIGNED NOT NULL AUTO_INCREMENT,
    pseudo VARCHAR(20) UNIQUE NOT NULL,
    utilisateurId INT UNSIGNED,
    UNIQUE(pseudo),
    PRIMARY KEY (idParticulier),
    KEY utilisateurId (utilisateurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table Particulier
INSERT INTO Particulier (idParticulier, pseudo, utilisateurId)
VALUES
(1, 'fantastix', 2),
(2, "brwn", 1),
(3, 'natty', 7),
(4, "princa", 9),
(5, 'chengy', 10),
(6, "lola67200", 11),
(7, 'altyx', 12),
(8, "petiteLettre", 14),
(9, 'ksandra', 19),
(10, "misty", 16),
(11, 'pierre_noel', 17),
(12, "galandryx", 18);

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
INSERT INTO Avis (idAvis, nombreEtoiles, texte, destinataireId, redacteurId)
VALUES
    (1, 4, 'Très bon service!', 18, 10),
    (2, 5, 'Excellent service, je le recommande!', 15, 17),
    (3, 3, 'Service moyen.', 12, 8),
    (4, 5, 'Rien à redire, tout était parfait!', 5, 16),
    (5, 2, 'Assez déçu de la prestation, manque de serieux.', 14, 7),
    (6, 4, 'Service client réactif et efficace.', 19, 13),
    (7, 1, 'Je ne recommande pas du tout.', 11, 6),
    (8, 5, 'Offreur rapide dans les réponses, merci!', 20, 2),
    (9, 4, 'Très satisfait du service effectué.', 3, 19),
    (10, 3, 'Qualité moyenne.', 1, 14);

-- Structure de la table Categorie
--
DROP TABLE IF EXISTS Categorie;
CREATE TABLE Categorie (
    idCategorie INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nomCategorie VARCHAR(50) UNIQUE NOT NULL,
    PRIMARY KEY (idCategorie)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Categorie
INSERT INTO Categorie (idCategorie, nomCategorie)
VALUES
(1, 'Ménage'),
(2, 'Services à la personne'),
(3, 'Rénovation & construction'),
(4, 'Jardinage & bricolage'),
(5, 'Réparation & maintenance'),
(6, 'Informatique & administratif'),
(7, 'Cours & coaching'),
(8, 'Evènements & divertissements'),
(9, 'Santé & bien-être'),
(10, 'Animaux'),
(11, 'Artisanat & création'),
(12, "Garde d'enfants"),
(13, 'Autres');



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
INSERT INTO TypeAnnonce (idTypeAnnonce, nomTypeAnnonce)
VALUES
(1, 'Offre'),
(2, 'Demande');


-- Structure de la table Annonce
--
DROP TABLE IF EXISTS Annonce;
CREATE TABLE Annonce (
    idAnnonce INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titre VARCHAR(50) NOT NULL,
    datePublication DATETIME NOT NULL,
    photo VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    prix FLOAT NOT NULL,
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
INSERT INTO Annonce (idAnnonce, titre, datePublication, photo, description, prix, ville, codePostal, latitude, longitude, createurId, typeAnnonceId, categorieId)
VALUES
(1, "Service de réparation d'ordinateurs", '2024-09-01 10:30:00', 'image1.jpg', 'Réparation rapide et professionnelle d\'ordinateurs.', 10,'Paris', '75001', '48.8566', '2.3522', 1, 1, 6),
(2, "Cours de yoga en plein air", '2024-09-02 12:45:00', 'image2.jpg', 'Cours de yoga pour tous les niveaux.', 13,'Lyon', '69001', '45.75', '4.85', 5, 2, 4),
(3, "Services de jardinage", '2024-09-03 15:20:00', 'image3.jpg', 'Entretien de jardins, tonte de pelouse, taille d\'arbustes.',11, 'Marseille', '13001', '43.2965', '5.3698', 12, 1, 3),
(4, "Cours de guitare pour débutants", '2024-09-04 14:10:00', 'image4.jpg', 'Cours de guitare pour apprendre les bases.', 10.5,'Toulouse', '31000', '43.6045', '1.4442', 7, 2, 8),
(5, "Service de traiteur pour événements", '2024-09-05 18:00:00', 'image5.jpg', 'Traiteur professionnel pour mariages, anniversaires, etc.', 25,'Nice', '06000', '43.7102', '7.2620', 15, 1, 11),
(6, "Cours de cuisine à domicile", '2024-09-06 11:00:00', 'image6.jpg', 'Apprenez à cuisiner de délicieux plats chez vous.',30, 'Bordeaux', '33000', '44.8378', '-0.5792', 2, 2, 11),
(7, "Service de réparation de vélos", '2024-09-07 16:30:00', 'image7.jpg', 'Réparation et entretien de vélos à domicile.',15 ,'Lille', '59000', '50.6292', '3.0573', 19, 1, 4),
(8, "Cours de peinture pour enfants", '2024-09-08 13:15:00', 'image8.jpg', 'Cours de peinture artistique pour les enfants.',18, 'Nantes', '44000', '47.2184', '-1.5536', 11, 2, 7),
(9, "Service de dépannage automobile", '2024-09-09 17:45:00', 'image9.jpg', 'Dépannage rapide en cas de panne automobile.',48, 'Strasbourg', '67000', '48.5734', '7.7521', 8, 1, 9),
(10, "Cours de danse latine", '2024-09-10 19:00:00', 'image10.jpg', 'Apprenez à danser la salsa, la bachata, et plus encore.',32, 'Rennes', '35000', '48.1173', '-1.6778', 14, 2, 10),
(11, "Service de coiffure à domicile", '2024-09-11 10:00:00', 'image11.jpg', 'Coiffure professionnelle dans le confort de votre foyer.',50, 'Montpellier', '34000', '43.6116', '3.8770', 3, 1, 7),
(12, "Cours de langues étrangères", '2024-09-12 14:30:00', 'image12.jpg', 'Cours de français, anglais, espagnol, etc.',11, 'Nancy', '54000', '48.6921', '6.1844', 18, 2, 13),
(13, "Service de photographie pour événements", '2024-09-13 16:50:00', 'image13.jpg', 'Photographe professionnel pour vos mariages, fêtes, etc.',102, 'Metz', '57000', '49.1193', '6.1755', 10, 1, 8),
(14, "Cours de natation pour enfants", '2024-09-14 11:20:00', 'image14.jpg', 'Apprenez à nager de manière ludique.',36, 'Dijon', '21000', '47.3220', '5.0415', 6, 2, 5),
(15, "Service de coaching sportif à domicile", '2024-09-15 09:30:00', 'image15.jpg', 'Entraînement personnalisé dans le confort de votre maison.',42, 'Grenoble', '38000', '45.1885', '5.7245', 17, 1, 4),
(16, "Cours de théâtre pour adolescents", '2024-09-16 12:00:00', 'image16.jpg', 'Cours de théâtre pour développer les compétences d\'expression.',27, 'Angers', '49000', '47.4784', '-0.5632', 4, 2, 2),
(17, "Service de décoration d'intérieur", '2024-09-17 14:40:00', 'image17.jpg', 'Conseils et services de décoration pour votre intérieur.',17, 'Avignon', '84000', '43.9493', '4.8055', 9, 1, 12),
(18, "Cours de musique pour adultes", '2024-09-18 18:20:00', 'image18.jpg', 'Apprenez à jouer d\'un instrument de musique.',18, 'Caen', '14000', '49.1829', '-0.3707', 16, 2, 8),
(19, "Service de baby-sitting", '2024-09-19 16:15:00', 'image19.jpg', 'Garde d\'enfants professionnelle et attentionnée.',25, 'Amiens', '80000', '49.8941', '2.3028', 12, 1, 1),
(20, "Cours de photographie pour débutants", '2024-09-20 14:00:00', 'image20.jpg', 'Apprenez les bases de la photographie avec un professionnel.',26, 'Lorient', '56100', '47.7486', '-3.3660', 5, 2, 13);



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
INSERT INTO Favoris (utilisateurId, annonceId)
VALUES
(7, 5),
(3, 8),
(5, 12),
(7, 17),
(10, 3),
(12, 14),
(15, 6),
(18, 10),
(20, 19),
(2, 16);

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
INSERT INTO Conversation (idConversation, conversationSupprimeeInitiateur, conversationSupprimeeContact, annonceId, initiateurId)
VALUES
(1, 0, 0, 3, 5),
(2, 1, 0, 10, 7),
(3, 0, 1, 15, 12),
(4, 1, 1, 7, 18),
(5, 0, 0, 18, 4),
(6, 1, 1, 5, 14),
(7, 0, 1, 9, 1),
(8, 0, 0, 16, 20),
(9, 1, 0, 12, 3),
(10, 1, 0, 6, 9),
(11, 0, 1, 1, 17),
(12, 0, 0, 19, 11),
(13, 1, 0, 8, 19),
(14, 0, 1, 11, 2),
(15, 0, 0, 14, 16),
(16, 1, 1, 2, 6),
(17, 0, 1, 13, 15),
(18, 0, 0, 4, 8),
(19, 1, 1, 20, 10),
(20, 1, 1, 17, 13);



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
INSERT INTO Participer (participantId, conversationId)
VALUES
(1, 5),
(3, 8),
(5, 12),
(7, 17),
(10, 3),
(12, 14),
(15, 6),
(18, 10),
(20, 19),
(2, 16),
(4, 9),
(6, 11),
(8, 13),
(11, 18),
(13, 15),
(16, 20),
(19, 1),
(14, 7),
(17, 2),
(9, 4);



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
    FOREIGN KEY (expediteurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE SET NULL,
    FOREIGN KEY (conversationId) REFERENCES Conversation(idConversation) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Message
INSERT INTO Message (idMessage, dateCreation, texte, estLu, expediteurId, conversationId)
VALUES
(1, "2024-01-01 08:30:00", "Salut, comment ça va ?", 1, 5, 3),
(2, "2024-01-02 10:45:00", "Je vais bien, merci ! Et toi ?", 0, 8, 7),
(3, "2024-01-03 12:20:00", "Super ! Qu'as-tu prévu pour aujourd'hui ?", 1, 12, 5),
(4, "2024-01-04 15:10:00", "Rien de spécial, juste du travail. Et toi ?", 0, 17, 10),
(5, "2024-01-05 17:45:00", "Occupé aussi. Je travaille sur un projet intéressant.", 1, 3, 20),
(6, "2024-01-06 09:30:00", "C'est génial ! De quoi s'agit-il ?", 0, 14, 12),
(7, "2024-01-07 11:55:00", "Je développe une nouvelle application web.", 1, 6, 15),
(8, "2024-01-08 14:40:00", "Impressionnant ! Tu as besoin d'aide ?", 0, 10, 18),
(9, "2024-01-09 16:25:00", "Pas pour l'instant, mais merci !", 1, 19, 2),
(10, "2024-01-10 18:15:00", "D'accord, fais-moi savoir si tu as besoin de quelque chose.", 0, 2, 16),
(11, "2024-01-11 20:05:00", "Salut, j'ai une question sur le projet dont nous avons discuté hier.", 1, 9, 4),
(12, "2024-01-12 22:30:00", "Bien sûr, pose ta question.", 0, 11, 6),
(13, "2024-01-13 09:15:00", "Comment puis-je intégrer une fonction de chat en temps réel ?", 1, 13, 11),
(14, "2024-01-14 11:20:00", "Tu peux utiliser Socket.io pour cela.", 0, 11, 15),
(15, "2024-01-15 13:40:00", "Merci, je vais le vérifier.", 1, 15, 20),
(16, "2024-01-16 15:55:00", "De rien ! N'hésite pas si tu as d'autres questions.", 0, 20, 1),
(17, "2024-01-17 17:30:00", "Salut, ça fait longtemps !", 1, 1, 17),
(18, "2024-01-18 19:45:00", "Oui, ça fait un moment. Comment ça va ?", 0, 7, 14),
(19, "2024-01-19 21:10:00", "Ça va bien, merci ! Et toi ?", 1, 2, 17),
(20, "2024-01-20 23:25:00", "Je vais bien aussi. Quoi de neuf de ton côté ?", 0, 4, 9);




DROP TABLE IF EXISTS Signalement;
CREATE TABLE Signalement (
    idSignalement INT UNSIGNED NOT NULL AUTO_INCREMENT,
    dateSignalement DATETIME NOT NULL,
    motif VARCHAR(255) NOT NULL,
    commentaire TEXT NOT NULL,
    messageId INT UNSIGNED DEFAULT NULL,
    avisId INT UNSIGNED DEFAULT NULL,
    annonceId INT UNSIGNED DEFAULT NULL,
    utilisateurId INT UNSIGNED DEFAULT NULL,
    signaleurId INT UNSIGNED,
    PRIMARY KEY (idSignalement),
    KEY avisId (avisId),
    KEY messageId (messageId),
    KEY annonceId (annonceId),
    KEY utilisateurId (utilisateurId),
    KEY signaleurId (signaleurId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--

-- Contenu de la table Signalement
INSERT INTO Signalement (idSignalement,dateSignalement, motif, commentaire, messageId, avisId, annonceId, utilisateurId, signaleurId)
VALUES
(1,"2024-01-01 08:30:00", "Contenu inapproprié", "Le message contient un langage offensant.", 5, NULL, NULL, NULL, 3),
(2,"2024-01-02 10:45:00", "Spam", "L'utilisateur a envoyé plusieurs messages de spam.", 8, NULL, NULL, NULL, 7),
(3,"2024-01-03 12:20:00", "Fausse information", "L'annonce contient des informations fausses.", NULL, NULL, 12, NULL, 5),
(4,"2024-01-04 15:10:00", "Comportement suspect", "L'utilisateur a un comportement suspect.", NULL, NULL, NULL,9, 17),
(5,"2024-01-05 17:45:00", "Harcèlement", "L'utilisateur harcèle d'autres membres.", NULL, 3, NULL, NULL, 10),
(6,"2024-01-06 09:30:00", "Contenu inapproprié", "Le message contient des images inappropriées.", 14, NULL, NULL, NULL, 12),
(7,"2024-01-07 11:55:00", "Fraude", "L'annonce semble être une fraude.", NULL, NULL, 6, NULL, 15),
(8,"2024-01-08 14:40:00", "Contenu inapproprié", "Le message contient des propos discriminatoires.", 10, NULL, NULL, NULL, 18),
(9,"2024-01-09 16:25:00", "Arnaque", "L'annonce semble être une arnaque.", NULL, NULL, 19, NULL, 20),
(10,"2024-01-10 18:15:00", "Spam", "L'utilisateur a envoyé plusieurs messages de spam.", 16, NULL, NULL, NULL, 2),
(11,"2024-01-11 20:05:00", "Fausse information", "L'annonce contient des informations fausses.", NULL, 9, 4, NULL, 4),
(12,"2024-01-12 22:30:00", "Comportement suspect", "L'utilisateur a un comportement suspect.", 15,NULL, NULL, NULL, 11),
(13,"2024-01-13 09:15:00", "Harcèlement", "L'utilisateur harcèle d'autres membres.", NULL, 6, NULL, NULL, 8),
(14,"2024-01-14 11:20:00", "Contenu inapproprié", "Le message contient un langage offensant.", 15, NULL, NULL, NULL, 11),
(15,"2024-01-15 13:40:00", "Fraude", "L'annonce semble être une fraude.", NULL, NULL, 14, NULL, 16),
(16,"2024-01-16 15:55:00", "Contenu inapproprié", "Le message contient des images inappropriées.", 20, NULL, NULL, NULL, 1),
(17,"2024-01-17 17:30:00", "Arnaque", "L'annonce semble être une arnaque.", NULL, 1, 17, NULL, 19),
(18,"2024-01-18 19:45:00", "Spam", "L'utilisateur a envoyé plusieurs messages de spam.", 7, NULL, NULL, NULL, 14),
(19,"2024-01-19 21:10:00", "Fausse information", "L'annonce contient des informations fausses.", NULL, NULL, 2, NULL, 17),
(20,"2024-01-20 23:25:00", "Comportement suspect", "L'utilisateur a un comportement suspect.", NULL, 10, NULL, NULL, 9);




-- Structure de la table Suivre
--
DROP TABLE IF EXISTS Suivre;
CREATE TABLE Suivre (
    suiviId INT UNSIGNED,
    abonneId INT UNSIGNED,
    PRIMARY KEY (suiviId,abonneId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Contenu de la table suivre ADD
INSERT INTO Suivre (suiviId, abonneId)
VALUES
(1, 5),
(3, 8),
(5, 12),
(7, 17),
(10, 3),
(12, 14),
(15, 6),
(18, 10),
(20, 19),
(2, 16),
(4, 9),
(6, 11),
(8, 13),
(11, 18),
(13, 15),
(16, 20),
(19, 1),
(14, 7),
(17, 2),
(9, 4);


-- Spécifications pour l'auto increment ADD
ALTER TABLE Utilisateur
    MODIFY idUtilisateur INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE Role
    MODIFY idRole INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE Entreprise
    MODIFY idEntreprise INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE AutoEntrepreneur
    MODIFY idAutoEntrepreneur INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE Particulier
    MODIFY idParticulier INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE Avis
    MODIFY idAvis INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

ALTER TABLE Categorie
    MODIFY idCategorie INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE TypeAnnonce
    MODIFY idTypeAnnonce INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE Annonce
    MODIFY idAnnonce INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE Conversation
    MODIFY idConversation INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE Message
    MODIFY idMessage INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE Signalement
    MODIFY idSignalement INT UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;


-- Contraintes des différentes tables
ALTER TABLE AvoirPourRole
    ADD CONSTRAINT fk_avoirpourrole_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT roleId FOREIGN KEY (roleId) REFERENCES Role(idRole);

ALTER TABLE Entreprise
    ADD CONSTRAINT fk_entreprise_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE;

ALTER TABLE AutoEntrepreneur
    ADD CONSTRAINT fk_autoentrepreneur_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE;

ALTER TABLE Particulier
    ADD CONSTRAINT fk_particulier_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE;

ALTER TABLE Avis
    ADD CONSTRAINT destinataireId FOREIGN KEY (destinataireId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT redacteurId FOREIGN KEY (redacteurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE SET NULL;

ALTER TABLE Annonce
    ADD CONSTRAINT createurId FOREIGN KEY (createurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT typeAnnonceId FOREIGN KEY (typeAnnonceId) REFERENCES TypeAnnonce(idTypeAnnonce) ON DELETE SET NULL,
    ADD CONSTRAINT categorieId FOREIGN KEY (categorieId) REFERENCES Categorie(idCategorie) ON DELETE CASCADE;

ALTER TABLE Favoris
    ADD CONSTRAINT fk_favoris_utilisateurid FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT fk_favoris_annonceid FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce) ON DELETE CASCADE;

ALTER TABLE Conversation
    ADD CONSTRAINT fk_conversation_annonceid FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce) ON DELETE SET NULL,
    ADD CONSTRAINT fk_conversation_initiateurid FOREIGN KEY (initiateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE SET NULL;

ALTER TABLE Participer
    ADD CONSTRAINT participantId FOREIGN KEY (participantId) REFERENCES Utilisateur(idUtilisateur),
    ADD CONSTRAINT conversationId FOREIGN KEY (conversationId) REFERENCES Conversation(idConversation);

ALTER TABLE Signalement
    ADD CONSTRAINT avisId FOREIGN KEY (avisId) REFERENCES Avis(idAvis) ON DELETE CASCADE,
    ADD CONSTRAINT messageId FOREIGN KEY (messageId) REFERENCES Message(idMessage) ON DELETE CASCADE,
    ADD CONSTRAINT annonceId FOREIGN KEY (annonceId) REFERENCES Annonce(idAnnonce) ON DELETE CASCADE,
    ADD CONSTRAINT utilisateurId FOREIGN KEY (utilisateurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT signaleurId FOREIGN KEY (signaleurId) REFERENCES Utilisateur(idUtilisateur) ON DELETE SET NULL;


ALTER TABLE Suivre
    ADD CONSTRAINT fk_suivre_suiviid FOREIGN KEY (suiviId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE,
    ADD CONSTRAINT fk_suivre_abonneid FOREIGN KEY (abonneId) REFERENCES Utilisateur(idUtilisateur) ON DELETE CASCADE;


-- Création de l'utilisateur pour l'administration de la base de données
CREATE USER 'admin_bdd'@'localhost' IDENTIFIED BY 'adminbdd*1';
GRANT ALL PRIVILEGES ON do4u.* TO 'admin_bdd'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;

COMMIT;
SET AUTOCOMMIT = 1;
