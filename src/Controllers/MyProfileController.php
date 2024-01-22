<?php

namespace App\Controllers;
use App\Models\Utilisateur;
use App\Models\Annonce;


class MyProfileController extends Controller
{

    const URL_CREATE = '/creationAd.php';
    const URL_INDEX = '/index.php';

    const URL_HANDLER = '/handlers/ad-handler.php';

    
    public function showMyProfile() {
        // get user id from session
        $idUtilisateur = $_SESSION['current_user_id']; // Replace 123 with the actual value of $idUtilisateur
        $users = Utilisateur::getUserById($idUtilisateur);
        
        $actionUrl = self::URL_HANDLER;

        // get user's ads
        $ads = Annonce::getUserAnnonces($idUtilisateur);
        
        require_once __DIR__ . '/../../views/myProfile.php';
    }

    public function showMyParameters()
    {
        $this->render('parameters');
    }


}

    


