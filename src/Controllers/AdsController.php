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
        const URL_PROFIL = '/MyProfile.php';
        const URL_CREATE = '/creationAd.php';
        const URL_UPDATE = '/modificationAd.php';
        const URL_INDEX = '/ads.php';
        const URL_ADS = '/ads.php';
        const URL_DETAIL = '/adDetails.php';
        const URL_HANDLER = '/handlers/ad-handler.php';
        const ITEMS_PER_PAGE = 8;
        const MY_PROFIEL_URL = '/myProfile.php';

    // show all ads
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

    //  show ads by categorie
    public function showAdsByCategorie()
    {   
        require_once __DIR__ . '/../../views/ads.php';
    }

    // add creation page
    public function showCreationPage()
    {
        $actionUrl = self::URL_HANDLER;
        require_once __DIR__ . '/../../views/creationAd.php';
    }

    // my profile page
    public function showMyProfil()
    {
        require_once __DIR__ . '/../../views/MyProfile.php';
    }

    // show ad details
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

    // show modification page
    public function showModificationPage()
    {
      
        if (isset($_GET['id'])) {
            $idAnnonce = intval($_GET['id']);
            
            $adModification = Annonce::getModificationAd($idAnnonce);

            if ($adModification){
            $annonceTypes = Annonce::getAnnonceTypes($idAnnonce);
            $annonceTypeIds = Annonce::getAnnonceTypeIds($idAnnonce);

            $categories = Annonce::getAllCategories();

            $actionUrl = self::URL_HANDLER;

                require_once __DIR__ . '/../../views/modificationAd.php';
            }      
        }
    }
    
    // show contact page
    public function showContactPage()
    {
        require_once __DIR__ . '/../../views/contact.php';
    }

    // search by keyword
    public function searchByKeyword()
    {
        try {
            $bdd = DB::getDB();
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Une érreur a été trouvée : " . $e->getMessage());
        }

        $bdd->query("SET NAMES UTF8");

        if (isset($_GET["s"]) && $_GET["s"] == "Rechercher") {
            $terme = isset($_GET["terme"]) ? htmlspecialchars($_GET["terme"]) : '';
            $terme = trim(strip_tags($terme));

            if (!empty($terme)) {
                $terme = strtolower($terme);
                $terms = str_split($terme);
                $select_terme = Annonce::chercherMultiChars($terms);

                if (is_array($select_terme) && !empty($select_terme)) {
                    // Handle $select_terme as an array of results
                    print_r($select_terme);
                } else {
                    // Display a message indicating no results
                    echo "No annonces found for the search term '{$terme}'";
                }
            } else {
                // Display a message for an empty search term
                echo "Vous devez entrer votre requête dans la barre de recherche";
            }
        }
    }


    // create annonce controller
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
                if (isset($_FILES['file'])) {
                    $file = $this->uploadFile($_FILES['file']);
    
                    if (!$file) {
                        echo "Erreur lors du téléchargement du fichier.";
                        return;
                    }
                } else {
                    echo "Aucun fichier téléchargé.";
                    return;
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
                $stmt->bindParam(':photo', $file);
                $stmt->bindParam(':typeAnnonceId', $annonceType);
                $stmt->bindParam(':categorieId', $categorieSelect);
                $stmt->bindParam(':createurId', $createurId, PDO::PARAM_INT);
    
                if ($stmt->execute()) {
                    echo "Annonce créée avec succès";
                    redirectAndExit(self::MY_PROFIEL_URL);
                    
                } else {
                    echo "Une erreur est survenue lors de la création de l'annonce.";
                }
            }
        } catch (PDOException $e) {
            echo 'PDO Exception: ' . $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    // upload file function
    private function uploadFile($file)
    {
        $tmpName = $file['tmp_name'];
        $name = $file['name'];
        $size = $file['size'];
        $error = $file['error'];
      
        $tabExtension = explode('.', $name);
        $extension = strtolower(end($tabExtension));
    
        $extensions = ['jpg', 'png', 'jpeg', 'gif'];
        $maxSize = 4000000;
    
        if (in_array($extension, $extensions) && $size <= $maxSize && $error == 0) {
            $uniqueName = uniqid('', true);
            $newFileName = $uniqueName . '.' . $extension;
    
            $destination = './upload/' . $newFileName;
    
            if (move_uploaded_file($tmpName, $destination)) {
                return $newFileName;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
    // update annonce function
    public function updateAnnonce()
    {
        try {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $idAnnonce = intval($_POST["idAnnonce"]);  
                $titre = strip_tags(trim($_POST["titre"]));
                $description = htmlspecialchars(trim($_POST["description"]));
                $prix = floatval($_POST["prix"]);
                $ville = htmlspecialchars(trim($_POST["ville"]));
                $codePostal = htmlspecialchars(trim($_POST["codePostal"]));
                $createurId = Auth::getSessionUserId();
    
                $db = DB::getDB();
                $sql = "UPDATE annonce SET 
                        titre = :titre,
                        description = :description,
                        prix = :prix,
                        ville = :ville,
                        codePostal = :codePostal
                        WHERE idAnnonce = :idAnnonce";
    
                $stmt = $db->prepare($sql);
    
                $stmt->bindParam(':titre', $titre);
                $stmt->bindParam(':description', $description);
                $stmt->bindParam(':prix', $prix);
                $stmt->bindParam(':ville', $ville);
                $stmt->bindParam(':codePostal', $codePostal);
                $stmt->bindParam(':idAnnonce', $idAnnonce, PDO::PARAM_INT);
    
                if ($stmt->execute()) {
                    echo "Annonce mise à jour avec succès";
                    redirectAndExit(self::URL_PROFIL);
                    exit();
                } else {
                    echo "Une erreur est survenue lors de la mise à jour de l'annonce.";
                }
            }
        } catch (PDOException $e) {
            echo 'PDO Exception: ' . $e->getMessage();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
   
    // delete annonce by id
    public static function deleteAnnonce()
    {
        Annonce::deleteAnnonce($_POST['idAnnonce']);
    }
    
}
