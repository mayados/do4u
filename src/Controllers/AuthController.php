<?php

namespace App\Controllers;

use Auth;
use DB;

class AuthController extends Controller
{
    public function login() : void
    {
        $this->render('auth/connexion'); // require views/auth/login.php
    }

    public function register() : void
    {
       $this->render('auth/inscription'); // require views/auth/register.php
    }

    public function store() : void
    {
        // Prepare POST
        $name = $_POST['nom'] ?? '';
        $login = $_POST['email'] ?? '';
        $password = $_POST['motdepass'] ?? '';

        $_SESSION['old'] = [
            'nom' => $name,
            'email' => $login,
            'motdepasse' => $password,
        ];

        // Validation
        if (strlen($name) < 2 or !$this->validateCredentials($login, $password)) {
            errors("Le champs nom doit avoir au moins 2 charactères.");
            errors("Le champs d'e-mail doit avoir au moins 6 charactères.");
            errors("Le champs de mot de passe doit avoir au moins 8 charactères");
            redirectToRouteAndExit('inscription');
        }

        // Check User
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :login;", ['login' => $login]);
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
