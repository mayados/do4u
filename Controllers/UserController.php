<?php

namespace Controllers;

require_once __DIR__.'/../Models/Utilisateur.php';
require_once __DIR__.'/../Models/AutoEntrepreneur.php';
require_once __DIR__.'/../Models/Entreprise.php';
require_once __DIR__.'/../Models/Particulier.php';

use DB;
use Models\Utilisateur;
use Models\AutoEntrepreneur;
use Models\Entreprise;
use Models\Particulier;

class UserController
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/user-handler.php';


    public function showMyProfile()
    {
        require_once base_path('views/myProfile.php');
    }
    
    public function showUserProfile()
    {
        require_once base_path('views/userProfile.php');
    }

    public function showMyParameters()
    {
        require_once base_path('views/parameters.php');
    }


}
