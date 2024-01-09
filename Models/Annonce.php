<?php
namespace Models;
use helpers\class\DB;
use PDO;
use Exception;
use PDOException;

class Annonce
{
    public ?int $id;
    public ?string $titre;
    public ?string $datePublication;
    public ?string $photo;
    public ?string $description;
    protected ?float $prix;
    public ?string $ville;



    // Constructeur
    public function __construct(
        ?string $titre ,
        ?string $datePublication,
        ?string $photo,
        ?string $description,
        ?float $prix,
        ?string $ville,

    ) {
        $this->titre = $titre;
        $this->datePublication = $datePublication;
        $this->photo = $photo;
        $this->description = $description;
        $this->prix = $prix;
        $this->ville = $ville;

    }

    public static function getAll() {
        $sql = "SELECT * FROM annonce";
        $result = DB::fetch($sql);
    
        // Vérifier si la requête a réussi et que le résultat est un tableau ou un objet
        if ($result !== false && is_iterable($result)) {
            return $result;
        }
    
        // Gérer les cas où la requête échoue ou le résultat n'est pas itérable
        return [];
    }
    
    public function addAnnonce()
    {
        return DB::statement(
            "INSERT INTO annonce ( titre, datePublication, photo, description, prix, ville)"
            . " VALUES ( :titre, :datePublication, :photo, :description, :prix, :ville)",
            [
               
                'titre' => $this->titre,
                'datePublication' => $this->datePublication,
                'photo' => $this->photo,
                'description' => $this->description,
                'prix' => $this->prix,
                'ville' => $this->ville,

            ],
        );
    }

    public function getAnnoncesByCategorie(string $categorie): void
    {
       $db = DB::getDB(); 
       
    }

    public static function getOffre() {
        try {
            $db = DB::getDB();
            $query = $db->query("SELECT annonce.*, 
                                    categorie.nomCategorie AS nomCategorie, 
                                    utilisateur.nomUtilisateur AS nomUtilisateur, 
                                    utilisateur.villeUtilisateur AS villeUtilisateur
                                FROM annonce 
                                JOIN categorie ON annonce.idAnnonce = categorie.idCategorie
                                JOIN utilisateur ON annonce.createurId = utilisateur.idUtilisateur
                                WHERE annonce.typeAnnonceId = 1 
                                ORDER BY annonce.idAnnonce ASC LIMIT 4");
        
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }
    
    public static function getDemmande(){
        try {
            $db = DB::getDB();
            $query = $db->query("SELECT annonce.*, 
                                    categorie.nomCategorie AS nomCategorie, 
                                    utilisateur.nomUtilisateur AS nomUtilisateur,
                                    utilisateur.nomUtilisateur AS nomUtilisateur,
                                    utilisateur.villeUtilisateur AS villeUtilisateur
                                FROM annonce 
                                JOIN categorie ON annonce.idAnnonce = categorie.idCategorie
                                JOIN utilisateur ON annonce.createurId = utilisateur.idUtilisateur
                                WHERE annonce.typeAnnonceId = 2 
                                ORDER BY annonce.idAnnonce ASC LIMIT 4");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }


}
