<?php
namespace App\Controllers;
use App\Models\Annonce;
use DB;
use PDO;
use Exception;
use PDOException;

class AdsController extends Controller
{
    
    const ITEMS_PER_PAGE = 8;


    public function showAll() {
        try {
            $db = DB::getDB(); 
    
            $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
            $offset = ($currentPage - 1) * self::ITEMS_PER_PAGE;
            
          
            $totalItems = Annonce::getTotalCount($db);
    
            $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
            
          
            $annonces = Annonce::getAll($db, $offset, self::ITEMS_PER_PAGE);
    
            
            require_once base_path('views/ads.php');
        } catch (PDOException $e) {
           
            echo 'PDO Exception: ' . $e->getMessage();
            require_once base_path('views/errors/500.php');
        }

    }
    

    public function showAdsByCategorie()
    {
        // Your main content logic goes here

        // Assuming ads.php is in the views directory
        require_once base_path('views/ads.php');
    }


    public function showCreationPage()
    {
        require_once base_path('views/creationAd.php');

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
                require_once base_path('views/adDetails.php');
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
        require_once base_path('views/modificationAd.php');
    }
    public function showContactPage()
    {
        require_once base_path('views/contact.php');
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

    
  
    


