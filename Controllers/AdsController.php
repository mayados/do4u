<?php

namespace Controllers;

require_once __DIR__.'/../Models/Annonce.php';

use DB;
use Models\Annonce;

class AdsController
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/ad-handler.php';


    public function showAdsByCategorie()
    {
        require_once base_path('views/ads.php');
    }

    public function showCreationPage()
    {
        require_once base_path('views/creationAd.php');
    }

    public function showModificationPage()
    {
        require_once base_path('views/modificationAd.php');
    }

    public function showDetails()
    {
        require_once base_path('views/adDtails.php');
    }


}
