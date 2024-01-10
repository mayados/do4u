<?php
namespace Controllers;

use Models\Annonce;

class AdsController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';


    public function getAll()
    {
        $annonces = Annonce::getAll();
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
        require_once __DIR__ . '/../views/adDetails.php';
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

    
  
    


