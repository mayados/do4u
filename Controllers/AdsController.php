<?php

namespace Controllers;
use Models\Annonce;



class AdsController
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    private $componentController;

    public function __construct(ComponentController $componentController)
    {
        $this->componentController = $componentController;
    }

    public function showAdsByCategorie()
    {
        $this->componentController->renderHeader();
        require_once __DIR__ . '/../../views/ads.php';
        $this->componentController->renderFooter();
    }


    public function showCreationPage()
    {
        require_once __DIR__ . '/../../views/creationAd.php';
    }

    public function showModificationPage()
    {
        require_once __DIR__ . '/../../views/modificationAd.php';
    }

    public function showDetails()
    {
        require_once __DIR__ . '/../../views/adDetails.php';
    }

   
 
    }
    
  
    


