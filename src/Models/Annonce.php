<?php
namespace App\Models;
use App\Controllers\AdsController;
use DB;
use PDO;
use PDOException;
use DateTime;

class Annonce extends Model 
{   
    const TABLE_NAME = 'annonce';
    const DATE_PUBLICATION_FORMAT = 'Y-m-d H:i:s';
    const COL_ID = 'idAnnonce';
    const COL_TITRE = 'titre';
    const COL_PHOTO = 'photo';
    const COL_DESCRIPTION = 'description';
    const COL_PRIX = 'prix';
    const COL_VILLE = 'ville';

  

    public function __construct(array $data = [])
    {
        $this->hydrate($data);
    }
    public function toArray()
    {
        return [
            self::COL_TITRE => $this->titre,
            self::COL_PHOTO => $this->photo
            
        ];
    }
   
   
    public static function getAll(PDO $db, $offset, $limit)
    {
        try {
            $query = $db->prepare("SELECT * FROM " . self::TABLE_NAME . "
                                ORDER BY " . self::COL_ID . " ASC
                                LIMIT :limit OFFSET :offset");

            $query->bindParam(':limit', $limit, PDO::PARAM_INT);
            $query->bindParam(':offset', $offset, PDO::PARAM_INT);

            $query->execute();

            $results = $query->fetchAll(PDO::FETCH_ASSOC);
            
          
            $annonces = [];
            foreach ($results as $result) {
                $annonces[] = new Annonce($result);
            }

            return $annonces;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    

    public static function getTotalCount()
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT COUNT(*) AS total FROM annonce");
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

            return $result['total'];
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }
    
   public static function getAdDetailsById(int $adId)
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT annonce.*, 
                                        categorie.nomCategorie AS nomCategorie, 
                                        utilisateur.nomUtilisateur AS nomUtilisateur, 
                                        utilisateur.villeUtilisateur AS villeUtilisateur,
                                        typeannonce.nomTypeAnnonce AS nomTypeAnnonce    
                                    FROM 
                                        annonce 
                                    JOIN 
                                        categorie ON annonce.categorieId = categorie.idCategorie
                                    JOIN 
                                        utilisateur ON annonce.createurId = utilisateur.idUtilisateur
                                    JOIN 
                                        typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce 
                                    WHERE
                                        annonce.idAnnonce = :id
                                    ORDER BY 
                                        annonce.idAnnonce ASC");
            $query->bindParam(':id', $adId, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
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
                                    utilisateur.villeUtilisateur AS villeUtilisateur,
                                    typeannonce.nomTypeAnnonce AS nomTypeAnnonce    
                                FROM 
                                    annonce 
                                JOIN 
                                    categorie ON annonce.categorieId = categorie.idCategorie
                                JOIN 
                                    utilisateur ON annonce.createurId = utilisateur.idUtilisateur
                                JOIN 
                                    typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce
                                WHERE annonce.typeAnnonceId = 1 
                                ORDER BY annonce.idAnnonce ASC limit 4");
        
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
                                    utilisateur.villeUtilisateur AS villeUtilisateur,
                                    typeannonce.nomTypeAnnonce AS nomTypeAnnonce    
                                FROM 
                                    annonce 
                                JOIN 
                                    categorie ON annonce.categorieId = categorie.idCategorie
                                JOIN 
                                    utilisateur ON annonce.createurId = utilisateur.idUtilisateur
                                JOIN 
                                    typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce
                                WHERE annonce.typeAnnonceId = 2 
                                ORDER BY annonce.idAnnonce ASC limit 4");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }
    public static function chercher(){
        try {
            $db = DB::getDB();
            $query = $db->query("SELECT titre, description 
                                    FROM  annonce 
                                    WHERE tite LIKE ? OR description LIKE ?");
        
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }
    

}
