<?php

namespace App\Controllers;
use App\Models\Utilisateur;
use App\Models\Annonce;

class MyProfileController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';
    private $componentController;
    

    public function showMyProfile() {
        // get user id from session
        $idUtilisateur = $_SESSION['current_user_id']; // Replace 123 with the actual value of $idUtilisateur
        $users = Utilisateur::getUserById($idUtilisateur);

        // get user's ads
        $ads = Annonce::getUserAnnonces($idUtilisateur);
        
        require_once __DIR__ . '/../../views/myProfile.php';
    }
}

    


