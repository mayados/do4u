<?php
namespace App\Controllers;
use App\Models\Annonce;
use DB;
use PDO;
use PDOException;
use Auth;
use Exception;

    class AdsController extends Controller
    {
        const URL_CREATE = '/creationAd.php';
        const URL_INDEX = '/ads.php';
        const URL_ADS = '/ads.php';
        const URL_HANDLER = '/handlers/ad-handler.php';
        const ITEMS_PER_PAGE = 8;
        const MY_PROFIEL_URL = '/myProfile.php';

    public function getAll()
    {
        $userId = Auth::getSessionUserId();

        // Pagination
        $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $offset = ($currentPage - 1) * self::ITEMS_PER_PAGE;

        // Check if a search term is provided
        $searchTerm = isset($_GET['terme']) ? $_GET['terme'] : null;

        // Check if a category filter is applied
        $selectedCategory = isset($_GET['selectedCategory']) ? $_GET['selectedCategory'] : null;

        if ($selectedCategory) {
            // Category filter is applied
            $totalItems = Annonce::getTotalCountByCategory($selectedCategory);
            $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
            $annonces = Annonce::getByCategory($selectedCategory, $offset, self::ITEMS_PER_PAGE);
        } elseif ($searchTerm) {
            // Search term is provided
            $totalItems = Annonce::getTotalCountBySearch($searchTerm);
            $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
            $annonces = Annonce::getAll($offset, self::ITEMS_PER_PAGE, $searchTerm);
        } else {
            // No category filter or search term, show all categories
            $totalItems = Annonce::getTotalCount();
            $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
            $annonces = Annonce::getAll($offset, self::ITEMS_PER_PAGE);
        }

        $allCategories = Annonce::getAllCategories();

        require_once __DIR__ . '/../../views/ads.php';
        require_once __DIR__ . '/../../views/components/menu.php';
    }


    public function showAdsByCategorie()
    {   
        require_once __DIR__ . '/../../views/ads.php';
    }


    public function showCreationPage()
    {
        $actionUrl = self::URL_HANDLER;
        require_once __DIR__ . '/../../views/creationAd.php';
    }

    public function showAdDetails()
    {   
        $annonceOffre = Annonce::getOffre();
        $annonceDemande = Annonce::getDemmande();
        
        if (isset($_GET['id'])) {
            $adId = intval($_GET['id']);
            $adDetails = Annonce::getAdDetailsById($adId);

            if ($adDetails) {
                require_once __DIR__ . '/../../views/adDetails.php';
            } else {
                // Handle case where ad with the given ID was not found
                echo '<p>Ad not found</p>';
            }
        } else {
            // Handle case where 'id' parameter is not set in the URL
            echo '<p>Ad ID not provided</p>';
        }
    }

    public function showModificationPage()
    {
        require_once __DIR__ . '/../../views/modificationAd.php';
    }

    public function showContactPage()
    {
        require_once __DIR__ . '/../../views/contact.php';
    }


    public function seachByKeyword()
    {   
        try
        {
            $bdd = DB::getDB();
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
            die("Une érreur a été trouvée : " . $e->getMessage());
        }
        $bdd->query("SET NAMES UTF8");

        if (isset($_GET["s"]) && $_GET["s"] == "Rechercher")
        {
            $terme = isset($_GET["terme"]) ? htmlspecialchars($_GET["terme"]) : '';
            $terme = trim($terme); 
            $terme = strip_tags($terme); 

            if (!empty($terme))
            {
                $terme = strtolower($terme);
                $select_terme = Annonce::chercher($terme);
            }
            else
            {
                $message = "Vous devez entrer votre requête dans la barre de recherche";
            }
        }
    }

    public function createAnnonce()
    {
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $titre = strip_tags(trim($_POST["titre"]));
                $description = htmlspecialchars(trim($_POST["description"]));
                $prix = floatval($_POST["prix"]);
                $ville = htmlspecialchars(trim($_POST["ville"]));
                $codePostal = htmlspecialchars(trim($_POST["codePostal"]));
                $categorieSelect = intval($_POST["categorieId"]);
                $annonceType = intval($_POST["typeAnnonceId"]);
    
                $createurId = Auth::getSessionUserId();
    
                // Vérifier si le fichier a été téléchargé avec succès
                if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
                    $img_name = $_FILES['file']['name'];
                    $img_size = $_FILES['file']['size'];
                    $tmp_name = $_FILES['file']['tmp_name'];
                    $file_extension = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    
                    $allowed_extensions = array("jpg", "jpeg", "png");
                    if (in_array($file_extension, $allowed_extensions) && $img_size <= 4000000) {
                        $new_file = '/' . uniqid("IMG-", true) . '.' . $file_extension;
                    if(!file_exists($new_file)){
                        mkdir($new_file, 0777, true);
                    }
                    echo "chemin du fichier de destination : $new_file";
                        move_uploaded_file($tmp_name, $new_file);
                    } else {
                        echo "<center>Invalid file type or file size too large. Allowed types: jpg, jpeg, png .</center><br>";
                        $new_file = null;
                    }
                } else {
                    echo "<center>No file uploaded.</center><br>";
                    $new_file = null;
                }
        
                $db = DB::getDB();
                $sql = "INSERT INTO annonce(titre, categorieId, typeAnnonceId, photo, description, prix, ville, codePostal, createurId) 
                        VALUES (:titre, :categorieId, :typeAnnonceId, :photo, :description, :prix, :ville, :codePostal, :createurId)";
    
                $stmt = $db->prepare($sql);
    
                $stmt->bindParam(':titre', $titre);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':prix', $prix);
                $stmt->bindParam(':ville', $ville);
                $stmt->bindParam(':codePostal', $codePostal);
                $stmt->bindParam(':photo', $new_file);
                $stmt->bindParam(':typeAnnonceId', $annonceType);
                $stmt->bindParam(':categorieId', $categorieSelect);
                $stmt->bindParam(':createurId', $createurId, PDO::PARAM_INT);
    
                if ($stmt->execute()) {
                    echo "Annonce créée avec succès";
                    redirectAndExit(self::MY_PROFIEL_URL);
    
                    $query = $db->prepare("SELECT * FROM annonce ORDER BY datePublication ASC");
                    $query->execute();
    
                    $query->fetchAll(PDO::FETCH_ASSOC);
    
                    // Traiter les résultats ici si nécessaire
                } else {
                    throw new Exception("Erreur lors de la création de l'annonce: " . $stmt->errorInfo()[2]);
                }
            }
        } catch (PDOException $e) {
            throw new Exception('PDO Exception: ' . $e->getMessage());
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
   
    // delete annonce by id
    public static function deleteAnnonce()
    {
        try {
            // Retrieve idAnnonce from $_POST
            $idAnnonce = intval($_POST["id"]);

            $db = DB::getDB();
            $sql = "DELETE FROM annonce WHERE idAnnonce = :idAnnonce";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idAnnonce', $idAnnonce, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "Annonce supprimée avec succès";
                redirectAndExit(self::MY_PROFIEL_URL);
            } else {
                throw new Exception("Erreur lors de la suppression de l'annonce: " . $stmt->errorInfo()[2]);
            }
        } catch (PDOException $e) {
            throw new Exception('PDO Exception: ' . $e->getMessage());
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    

    // update annonce
    public static function updateAnnonce(){
        try {
            $db = DB::getDB();
            $sql = "UPDATE annonce SET titre = :titre, description = :description, prix = :prix, ville = :ville, codePostal = :codePostal, categorieId = :categorieId, typeAnnonceId = :typeAnnonceId WHERE idAnnonce = :idAnnonce";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':idAnnonce', $idAnnonce, PDO::PARAM_INT);
            $stmt->bindParam(':titre', $titre);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':prix', $prix);
            $stmt->bindParam(':ville', $ville);
            $stmt->bindParam(':codePostal', $codePostal);
            $stmt->bindParam(':categorieId', $categorieSelect);
            $stmt->bindParam(':typeAnnonceId', $annonceType);
            if ($stmt->execute()) {
                echo "Annonce modifiée avec succès";
                redirectAndExit(self::MY_PROFIEL_URL);
            } else {
                throw new Exception("Erreur lors de la modification de l'annonce: " . $stmt->errorInfo()[2]);
            }
        } catch (PDOException $e) {
            throw new Exception('PDO Exception: ' . $e->getMessage());
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

    