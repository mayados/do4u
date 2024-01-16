<?php

namespace App\Controllers;
use App\Models\Utilisateur;

class MyProfileController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    private $componentController;
    

    public function showMyProfile() {
        $idUtilisateur = $_SESSION['current_user_id']; // Replace 123 with the actual value of $idUtilisateur
        $users = Utilisateur::getUserById($idUtilisateur);
        require_once __DIR__ . '/../../views/myProfile.php';
    }
    
}

    


