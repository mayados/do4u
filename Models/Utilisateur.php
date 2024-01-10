<?php

namespace Models;
use helpers\class\DB;

class Utilisateur
{
    public ?int $idUtilisateur;
    public ?string $email;
    public ?string $nomUtilisateur;
    public ?string $prenomUtilisateur;
    public ?string $description;
    protected ?string $photo;
    public ?string $villeUtilisateur;
    public ?int $codePostalUtilisateur;
   

    // Constructeur
    public function __construct(
        ?int $idUtilisateur = null,
        ?string $email = null,
        ?string $nomUtilisateur = null,
        ?string $prenomUtilisateur = null,
        ?string $description =null,
        ?string $photo = null,
        ?string $villeUtilisateur = null,
        ?int $codePostalUtilisateur = null,
      
    ) {
        $this->idUtilisateur = $idUtilisateur;
        $this->email= $email;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->prenomUtilisateur = $prenomUtilisateur;
        $this->description = $description;
        $this->photo = $photo;
        $this->villeUtilisateur = $villeUtilisateur;
        $this->codePostalUtilisateur = $codePostalUtilisateur;
       
    }

    public function addUtilisateur()
    {
// Supposons que vous ayez les valeurs du formulaire dans des variables
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$motdepasse = $_POST['motdepasse'];

try {
    // Récupération de la connexion à la base de données
    $db = DB::getDB();

    // Construction de la requête INSERT INTO
    $sql = "INSERT INTO utilisateur(email, nomUtilisateur, prenomUtilisateur, motdepasse) VALUES (:email, :nomUtilisateur, :prenomUtilisateur, :motdepasse)";

    // Préparation de la requête
    $stmt = $db->prepare($sql);

    // Liaison des valeurs avec les paramètres de la requête
    $stmt->bindParam(':nomUtilisateur', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':prenomUtilisateur', $prenom);
    $stmt->bindParam(':motdepasse', $motdepasse);  // Attention à la correspondance des noms

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "Enregistrement réussi";
    } else {
        echo "Erreur lors de l'enregistrement : " . $stmt->errorInfo()[2];
    }
} catch (PDOException $e) {
    // Log PDO exceptions
    echo 'PDO Exception: ' . $e->getMessage();
    exit();
}

    }
}