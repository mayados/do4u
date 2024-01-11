<?php

namespace App\Controllers;
use DB;
use Auth;



class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/inscription.php';
    const URL_LOGIN = '/connexion.php';
    const URL_AFTER_LOGIN = '/ads.php';
    const URL_AFTER_LOGOUT = '/index.php';

    public function login() {
     
        require_once __DIR__ . '/../../views/connexion.php';
        if(isset($_POST["submit"])) {
            
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, "motDePasse", FILTER_VALIDATE_REGEXP, [
                "options" => [
                    "regexp" => "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/"
                    // au moins 6 caractères, majuscules, minuscules et chiffres
                ]
            ]);
    
            if($email && $password) {
                $user = $this->getUser($email);
                if($user) {
                    if(password_verify($password, $this->getPasswordByEmail($email))) {
                        $_SESSION["user"] = $user;
                        header("Location: ads.php?action=ads.php");
                        exit(); 
                    } else {
                        echo "Mot de passe incorrect";
                    }
                } else {
                    echo "Utilisateur non trouvé";
                }
            } else {
                echo "Données invalides";
            }
        }
    }
    public function setErrorMessage($message) {
        $_SESSION['error_message'] = $message;
        require_once __DIR__ . '/../../views/connexion.php';
    }

    public function setSuccessMessage($message) {
        $_SESSION['success_message'] = $message;
        require_once __DIR__ . '/../../views/connexion.php';
    }
    
    public function getUser($email) {
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :email;", ['email' => $email]);
        if ($users === false) {
            echo'Une erreur est survenue. Veuillez réessayer plus tard.';
            Auth::redirectAndExit(self::URL_LOGIN);
        }
        return (count($users) >= 1) ? $users[0] : null;
    }
    

    public function getPasswordByEmail($email) {
        $result = DB::fetch("SELECT motdepasse FROM utilisateur WHERE email = :email;", ['email' => $email]);
        
        if ($result) {
            return $result[0]['motdepasse'];
        } else {
            return null;
        }
    }
    

    public function register() 
    {
        
        require_once __DIR__ . '/../../views/inscription.php';
        
   
    }

         
    public function logout() {
        
        session_destroy();

        header("Location: /connexion.php");
        exit();
    }
    public function showInscription() 
    {
        require_once __DIR__ . '/../../views/inscription.php';
    }
    public static function isAuthOrRedirect() 
    {
       Auth::isAuthOrRedirect();
    }
    
    public static function isGuestOrRedirect() 
    {
       Auth:: isGuestOrRedirect();
    }
}
