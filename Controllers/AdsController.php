<?php
namespace Controllers;

use Models\Annonce;

class AdsController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    const ITEMS_PER_PAGE = 8;

    public function __construct(ComponentController $componentController)
    {

       parent::__construct($componentController);
    }

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
        require_once __DIR__ . '/../views/adDetails.php';
    }
    public function showModificationPage()
    {
        require_once __DIR__ . '/../views/modificationAd.php';
    }
}

    
  
    


