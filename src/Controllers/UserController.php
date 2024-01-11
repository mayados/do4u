<?php

namespace App\Controllers;


class UserController extends Controller
{
    

    
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
 

    public function showInscription() : void
    {
        require_once base_path('views/auth/inscription.php');
    }

}
