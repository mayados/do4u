<?php
namespace App\Controllers;
use App\Models\Annonce;
use DB;
use PDO;
use Exception;

class AdsController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    const ITEMS_PER_PAGE = 8;


    public function getAll()
{
    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    $offset = ($currentPage - 1) * self::ITEMS_PER_PAGE;

    // Check if a category filter is applied
    $selectedCategory = isset($_GET['selectedCategory']) ? $_GET['selectedCategory'] : null;

    if ($selectedCategory) {
        // Category filter is applied
        $totalItems = Annonce::getTotalCountByCategory($selectedCategory);
        $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
        $annonces = Annonce::getByCategory($selectedCategory, $offset, self::ITEMS_PER_PAGE);
    } else {
        // No category filter, show all categories
        $totalItems = Annonce::getTotalCount();
        $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
        $annonces = Annonce::getAll($offset, self::ITEMS_PER_PAGE);
    }

    $allCategories = Annonce::getAllCategories();

    require_once __DIR__ . '/../../views/ads.php';
}


    public function showAdsByCategorie()
    {
        // Your main content logic goes here

        // Assuming ads.php is in the views directory
        require_once __DIR__ . '/../../views/ads.php';
    }


    public function showCreationPage()
    {
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
    {   $result = Annonce::chercher();
        try
        {
         $bdd = DB::getDB();
         $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(Exception $e)
        {
          die("Une érreur a été trouvé : " . $e->getMessage());
        }
        $bdd->query("SET NAMES UTF8");
        
        if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
        {
         $_GET["terme"] = htmlspecialchars($_GET["terme"]); 
         $terme = $_GET["terme"];
         $terme = trim($terme); 
         $terme = strip_tags($terme); 
        
         if (isset($terme))
         {
          $terme = strtolower($terme);
          $select_terme = $result;
          
         }
         else
         {
          $message=("Vous devez entrer votre requete dans la barre de recherche");
         }
        }
    }
}
