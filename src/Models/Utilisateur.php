<?php

namespace App\Models;
use DB;
use PDOException;



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

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['mail'];
        $motdepasse = $_POST['motdepasse'];

try {
    
    $db = DB::getDB(); 
    $sql = "INSERT INTO utilisateur(email, nomUtilisateur, prenomUtilisateur, motdepasse) VALUES (:email, :nomUtilisateur, :prenomUtilisateur, :motdepasse)";
  
    $stmt = $db->prepare($sql);

    
    $stmt->bindParam(':nomUtilisateur', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':prenomUtilisateur', $prenom);
    $stmt->bindParam(':motdepasse', $motdepasse);  

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