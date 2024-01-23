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
        $idUtilisateur = $_SESSION['current_user_id']; 
        $users = Utilisateur::getUserById($idUtilisateur);
        
        $actionUrl = self::URL_HANDLER;

        // get user's ads
        $ads = Annonce::getUserAnnonces($idUtilisateur);
        require_once __DIR__ . '/../../views/myProfile.php';
    }

    public function showMyParameters()
    {   

        $actionUrl = self::URL_HANDLER;

        $users = Utilisateur::getUserById($_SESSION['current_user_id']);
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            dd($_POST);
            $idUtilisateur = $_SESSION['current_user_id'];
            
            $villeUtilisateur = $_POST['villeUtilisateur'];
            $description = $_POST['description'];

            // Update user information
            $utilisateur = new Utilisateur();
            $success = $utilisateur->updateUtilisateur($idUtilisateur, $villeUtilisateur, $description);

            if ($success) {
                echo "Mise à jour réussie";
        } else {
                echo "Erreur lors de la mise à jour";
            }
        }
        require_once __DIR__ . '/../../views/parameters.php';
    }


}

    


