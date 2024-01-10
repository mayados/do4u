<?php

namespace Controllers;
use helpers\class\DB;
use helpers\class\Auth;



class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/inscription.php';
    const URL_LOGIN = '/connexion.php';
    const URL_AFTER_LOGIN = '/ads.php';
    const URL_AFTER_LOGOUT = '/index.php';


    public function login() 
    {
        require_once __DIR__ . '/../views/connexion.php';
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
    
        // Validation
        if (!Auth::validateCredentials($login, $password)) {
            $this->errors("Le champ d'e-mail doit avoir au moins 6 caractères.");
            $this->errors("Le champ de mot de passe doit avoir au moins 8 caractères");
            Auth::redirectAndExit(self::URL_LOGIN);
        }
    
        // Check DB
        $user = $this->getUserByEmail($login);
    
        // Check user retrieved
        if ($user !== null && password_verify($password, $user['password'])) {
            $_SESSION[Auth::getSessionUserIdKey()] = $user['id'];
            Auth::redirectAndExit(self::URL_AFTER_LOGIN);
        }
    
        $this->errors("Les identifiants ne correspondent pas.");
        Auth::redirectAndExit(self::URL_LOGIN);
    }
    
  
    
    private function getUserByEmail($email) 
    {
      
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :email;", ['email' => $email]);
    
        if ($users === false) {
            $this->errors('Une erreur est survenue. Veuillez réessayer plus tard.');
            Auth::redirectAndExit(self::URL_LOGIN);
        }
    
        return (count($users) >= 1) ? $users[0] : null;
    }
    
 

    public function register() : void
    {
        
        require_once __DIR__ . '/../views/inscription.php';
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        $_SESSION['old'] = [
         
            'login' => $login,
            'password' => $password,
        ];
    
    
            // Validation

        if (!$this->validateCredentials($login, $password)) {
            $errors = [];
        
            if (strlen($login) < 6) {
                $errors[] = "Le champ d'e-mail doit avoir au moins 6 caractères.";
            }
        
            if (strlen($password) < 8) {
                $errors[] = "Le champ de mot de passe doit avoir au moins 8 caractères.";
            }
        
            if (!empty($errors)) {
                // Display the errors and redirect
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
                Auth::redirectAndExit(self::URL_AFTER_LOGOUT);
            }

        }       
         // Check User
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :login;", ['login' => $login]);
        if ($users === false) {
            $this->errors('Une erreur est survenue. Veuillez ré-essayer plus tard.');
            Auth::redirectAndExit(self::URL_REGISTER);
        } elseif (count($users) >= 1) {
            $this->errors('Cette adresse email est déjà utilisée.');
            Auth::redirectAndExit(self::URL_REGISTER);
        }
       // Version 2: Secure password with hash method
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Create new user
        $result = DB::statement(
            "INSERT INTO utilisateur(login, password)"
            ." VALUE(:login, :password);",
            [
                'login' => $login,
                'password' => $password,
            ]
        );
        if ($result === false) {
            $this->errors('Une erreur est survenue. Veuillez ré-essayer plus tard.');
            Auth::redirectAndExit(self::URL_REGISTER);
        }

        // Auth new user
        $_SESSION[Auth::getSessionUserIdKey()] = DB::getDB()->lastInsertId();

        // Clear old
        unset($_SESSION['old']);

        // Message + Redirection
        $_SESSION['sucess']('Vous êtes maintenant connecté.');
        Auth::redirectAndExit(self::URL_AFTER_LOGIN);
    }

    public function store() : void

    {
        


        


 
    }

    public function check() : void
    {

    }

    public function validateCredentials(string $login, string $password) : bool
    {
        // Validation
        if (strlen($login) < 6 or strlen($password) < 8) {
            return false;
        }

        return true;
    }

    public function logout() 
    {
        session_destroy();
        Auth::redirectAndExit(self::URL_AFTER_LOGOUT);
    }
    public function showInscription() : void
    {
        $this->render('inscription');
    }
}



    
