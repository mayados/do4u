<?php

namespace App\Models;
use DB;
use PDOException;
use PDO;

class Utilisateur extends Model
{
    protected ?int $idUtilisateur;
    protected ?string $email;
    protected ?string $nomUtilisateur;
    protected ?string $prenomUtilisateur;
    protected ?string $description;
    protected ?string $photo;
    protected ?string $villeUtilisateur;
    protected ?int $codePostalUtilisateur;

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    public function getNomUtilisateur(): ?string
    {
        return $this->nomUtilisateur;
    }

    public function setNomUtilisateur(?string $nomUtilisateur): void
    {
        $this->nomUtilisateur = $nomUtilisateur;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(?string $prenomUtilisateur): void
    {
        $this->prenomUtilisateur = $prenomUtilisateur;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function getVilleUtilisateur(): ?string
    {
        return $this->villeUtilisateur;
    }

    public function setVilleUtilisateur(?string $villeUtilisateur): void
    {
        $this->villeUtilisateur = $villeUtilisateur;
    }

    public function getCodePostalUtilisateur(): ?int
    {
        return $this->codePostalUtilisateur;
    }

    public function setCodePostalUtilisateur(?int $codePostalUtilisateur): void
    {
        $this->codePostalUtilisateur = $codePostalUtilisateur;
    }

    public function hasRole(): bool
    {
        return false;
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
        
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }

    }

    public static function getUserById(int $idUtilisateur): ?Utilisateur
    {
        try {
            $db = DB::getDB();
            $sql = "SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idUtilisateur', $idUtilisateur);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                $utilisateur = new Utilisateur();
                $utilisateur->setNomUtilisateur($result['nomUtilisateur']);
                $utilisateur->setPrenomUtilisateur($result['prenomUtilisateur']);
                $utilisateur->setDescription($result['description']);
                $utilisateur->setPhoto($result['photo']);
                $utilisateur->setVilleUtilisateur($result['villeUtilisateur']);
                $utilisateur->setCodePostalUtilisateur($result['codePostalUtilisateur']);
                return $utilisateur;
            } else {
                return null;
            }
        } catch (PDOException $e) {
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }
}