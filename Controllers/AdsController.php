<?php
namespace Controllers;
use Models\Annonce;
use helpers\class\DB;
use PDO;
use PDOException;

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
        $totalItems = Annonce::getTotalCount();
        $totalPages = ceil($totalItems / self::ITEMS_PER_PAGE);
        $annonces = Annonce::getAll($offset, self::ITEMS_PER_PAGE);
        require_once __DIR__ . '/../views/ads.php';
    }

    public function showAdsByCategorie()
    {
        // Your main content logic goes here

        // Assuming ads.php is in the views directory
        require_once __DIR__ . '/../views/ads.php';
    }


    public function showCreationPage()
    {
        require_once __DIR__ . '/../views/creationAd.php';

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
                require_once __DIR__ . '/../views/adDetails.php';
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
        require_once __DIR__ . '/../views/modificationAd.php';
    }
    public function showContactPage()
    {
        require_once __DIR__ . '/../views/contact.php';
    }
}

    
  
    


