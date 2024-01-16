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
        // for now, we have the two variable but I need to add condition if categorietype is offre show list of offre else
        // show list demande below the ad details
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


    public function chercherParMotClé()
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
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $titre = strip_tags(trim($_POST["titre"]));
            $description = htmlspecialchars(trim($_POST["description"]));
            $prix = floatval($_POST["prix"]); 
            $ville = htmlspecialchars(trim($_POST["ville"]));
            $codePostal = htmlspecialchars(trim($_POST["codePostal"]));
            $categorieSelect = intval($_POST["categorieId"]); 
            $annonceType = intval($_POST["typeAnnonceId"]); 
        
            try {
                $db = DB::getDB();
        
                $uploadDirectory = "../../public/assets/img/upload";
        
                if (!empty($_FILES["photo"]["name"][0])) {
                    $uploadedFiles = [];
                    foreach ($_FILES["photo"]["name"] as $key => $value) {
                        $fileName = $_FILES["photo"]["name"][$key];
                        $fileTmpName = $_FILES["photo"]["tmp_name"][$key];
                        $targetFilePath = $uploadDirectory . basename($fileName);
        
                       
                        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
                            $uploadedFiles[] = $targetFilePath;
                        } else {
                            echo "Erreur lors de l'upload du fichier.";
                            exit();
                        }
                    }
                    $photoPath = implode(",", $uploadedFiles);
                } else {
                    $photoPath = null;
                }
        
                $sql = "INSERT INTO annonce(titre, categorieId, typeAnnonceId, photo, description, prix, ville, codePostal ) 
                        VALUES (:titre, :categorieId, :typeAnnonceId, :photo,:description, :prix, :ville, :codePostal )";
        
                $stmt = $db->prepare($sql);
        
                $stmt->bindParam(':titre', $titre);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':prix', $prix);
                $stmt->bindParam(':ville', $ville);
                $stmt->bindParam(':codePostal', $codePostal);
                $stmt->bindParam(':photo', $photoPath);
                $stmt->bindParam(':typeAnnonceId', $annonceType);
                $stmt->bindParam(':categorieId', $categorieSelect);
        
                if ($stmt->execute()) {
                    echo "Annonce créée avec succès";
    
                    $query = $db->prepare("SELECT * FROM annonce WHERE createurId = ? OR createurId IS NULL ORDER BY datePublication DESC");
                    $query->bindParam(1, $_SESSION['idUtilisateur']);
                    $query->execute();

                    $results = $query->fetchAll(PDO::FETCH_ASSOC);
    
                } else {
                    throw new Exception("Erreur lors de la création de l'annonce: " . $stmt->errorInfo()[2]);
                }
            } catch (PDOException $e) {
                throw new Exception('PDO Exception: ' . $e->getMessage());
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    }