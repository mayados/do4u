<?php
namespace App\Models;

use App\Controllers\AdsController;
use DB;
use PDO;
use PDOException;
use Exception;

class Annonce
{
 
    protected ?int $idAnnonce = null;
    protected ?string $titre = null;
    protected ?string $datePublication = null;
    protected ?string $photo = null;
    protected ?string $description = null;
    protected ?float $prix = null;
    protected ?string $ville = null;
    protected ?string $codePostal = null;
    protected ?int $createurId = null;

    public function getIdAnnonce(): ?int
    {
        return $this->idAnnonce;
    }
    public function setIdAnnonce($idAnnonce){
        $this->idAnnonce = $idAnnonce;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): void
    {
        $this->titre = $titre;
    }

    public function getDatePublication(): ?string
    {
        return $this->datePublication;
    }

    public function setDatePublication(?string $datePublication): void
    {
        $this->datePublication = $datePublication;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(?float $prix): void
    {
        $this->prix = $prix;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): void
    {
        $this->ville = $ville;
    }

    public function getType(): ?string
    {
        return null;
    }

    public function getCategorie(): ?string
    {
        return null;
    }
    public function getCreateurId() {
        return $this->createurId;
    }
    Public function setCreateurId($createurId) {
        $this->createurId = $createurId;

    }

    // get all ads form database and paginate them
    public static function getAll( $offset,  $limit, $searchTerm = null)
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
                                    annonce.titre LIKE :searchTerm
                                ORDER BY 
                                    annonce.idAnnonce ASC
                                LIMIT :limit OFFSET :offset");

            $searchTerm = '%' . $searchTerm . '%';
            $query->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
            $query->bindParam(':limit', $limit, PDO::PARAM_INT);
            $query->bindParam(':offset', $offset, PDO::PARAM_INT);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // get all ads by category and paginate them
    public static function getByCategory(string $category, int $offset, int $limit)
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
                                WHERE categorie.nomCategorie = :category
                                ORDER BY annonce.idAnnonce ASC
                                LIMIT :limit OFFSET :offset");

            $query->bindParam(':category', $category, PDO::PARAM_STR);
            $query->bindParam(':limit', $limit, PDO::PARAM_INT);
            $query->bindParam(':offset', $offset, PDO::PARAM_INT);

            $query->execute();

            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // count all ads by category
    public static function getTotalCountByCategory(string $category)
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT COUNT(*) AS total FROM annonce 
                                JOIN categorie ON annonce.categorieId = categorie.idCategorie
                                WHERE categorie.nomCategorie = :category");
            $query->bindParam(':category', $category, PDO::PARAM_STR);
            $query->execute();

            $result = $query->fetch(PDO::FETCH_ASSOC);

            return $result['total'];
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // filter ads by category and paginate them
    public static function getAllCategories()
    {
        try {
            $db = DB::getDB();
            $query = $db->query("SELECT DISTINCT nomCategorie FROM categorie");
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // count all ads
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

    // get an ad by id  
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

    // Modify an ad
    public static function getModificationAd(int $idAnnonce){
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
            $query->bindParam(':id', $idAnnonce, PDO::PARAM_INT);
            $query->execute();

            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }

    }

    // get ads by their type which is offer
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
    
    // get ads by their type which is demand
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

    // search by keyword
    public static function chercherMultiChars($terms)
    {
        try {
            $db = DB::getDB();
            $conditions = [];

            foreach ($terms as $key => $term) {
                $conditions[] = "(titre LIKE :term{$key} OR description LIKE :term{$key})";
            }

            $query = $db->prepare("SELECT titre, description 
                                    FROM annonce 
                                    WHERE " . implode(" AND ", $conditions));

            foreach ($terms as $key => $term) {
                $query->bindValue(":term{$key}", '%' . $term . '%', PDO::PARAM_STR);
            }

            $query->execute();

            return $query->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            return 'PDO Exception: ' . $e->getMessage();
        }
    }


    // get total count of ads by search term
    public static function getTotalCountBySearch($searchTerm)
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT COUNT(*) as count FROM annonce WHERE titre LIKE :searchTerm");
            $searchTerm = '%' . $searchTerm . '%';
            $query->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            return $result['count'];
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // get all annonce of a user by user id
    public static function getUserAnnonces(){
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT annonce.*, 
                                        typeannonce.nomTypeAnnonce AS nomTypeAnnonce    
                                    FROM 
                                        annonce
                                    JOIN 
                                        typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce 
                                    WHERE
                                        annonce.createurId = :idUtilisateur
                                    ORDER BY datePublication DESC");

    
            $idUtilisateur = $_SESSION['current_user_id'];
            $query->bindParam(':idUtilisateur', $idUtilisateur, PDO::PARAM_INT);
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // get an ads type by id
    public static function getAnnonceTypes($idAnnonce)
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT typeannonce.idTypeAnnonce, typeannonce.nomTypeAnnonce
                                    FROM annonce
                                    JOIN typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce
                                    WHERE annonce.idAnnonce = :id");
    
            $query->bindParam(':id', $idAnnonce, PDO::PARAM_INT);
            $query->execute();
    
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // get an ads type by id
    public static function getAnnonceTypeIds($idAnnonce)
    {
        try {
            $db = DB::getDB();
            $query = $db->prepare("SELECT typeannonce.idTypeAnnonce
                                    FROM annonce
                                    JOIN typeannonce ON annonce.typeAnnonceId = typeannonce.idTypeAnnonce
                                    WHERE annonce.idAnnonce = :id");
    
            $query->bindParam(':id', $idAnnonce, PDO::PARAM_INT);
            $query->execute();
    
            $typeIds = array();
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                $typeIds[] = $row['idTypeAnnonce'];
            }
    
            return $typeIds;
        } catch (PDOException $e) {
            // Log PDO exceptions
            echo 'PDO Exception: ' . $e->getMessage();
            exit();
        }
    }

    // delete an ad by id
    public static function deleteAnnonce($idAnnonce)
    {
        try {
            // Retrieve idAnnonce from $_POST
            $idAnnonce = intval($_POST["id"]);

            // Use provided $db or get the DB instance
            $db = $db ?? DB::getDB();

            $db = DB::getDB();
            $sql = "DELETE FROM annonce WHERE idAnnonce = :idAnnonce";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idAnnonce', $idAnnonce, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "Annonce supprimée avec succès";
                redirectAndExit(AdsController::MY_PROFIEL_URL);
            } else {
                throw new Exception("Erreur lors de la suppression de l'annonce: " . $stmt->errorInfo()[2]);
            }
        } catch (PDOException $e) {
            throw new Exception('PDO Exception: ' . $e->getMessage());
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
}    