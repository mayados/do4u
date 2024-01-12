<?php

namespace App\Controllers;

class MyProfileController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    private $componentController;


    public function showMyProfile() {
        require_once __DIR__ . '/../../views/myProfile.php';
    }

}
    
  
    


