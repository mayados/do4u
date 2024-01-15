<?php
namespace App\Controllers;
use Auth;
use DB;
use PDO;
use PDOException;

class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/register.php';
    const URL_LOGIN = '/login.php';
    const URL_AFTER_LOGIN = '/index.php';
    const URL_AFTER_LOGOUT = '/connexion.php';
        
        public function login(): void 
        {
            $actionUrl = self::URL_HANDLER;
            require_once __DIR__ . '/../../views/auth/login.php';
        }
    
        public function register()
        {  
            $actionUrl = self::URL_HANDLER;
            require_once __DIR__ . '/../../views/auth/register.php';
        }
 
        public function logout() {
            session_destroy();
            redirectAndExit(self::URL_AFTER_LOGOUT);
        }

        public function validateCredentials(string $email, string $motDePasse) : bool
        {
            // Validation
            if (strlen($email) < 6 or strlen($motDePasse) < 8) {
                return false;
            }

            return true;
        }
    
        // user registration
        public static function store(): void
        {
            if (isset($_POST['nomUtilisateur'], $_POST['prenomUtilisateur'], $_POST['email'], $_POST['villeUtilisateur'], $_POST['codePostalUtilisateur'], $_POST['motDePasse'])) 
            {
                $nomUtilisateur = $_POST['nomUtilisateur'];
                $prenomUtilisateur = $_POST['prenomUtilisateur'];
                $email = $_POST['email'];
                $villeUtilisateur = $_POST['villeUtilisateur'];
                $codePostalUtilisateur = $_POST['codePostalUtilisateur'];
                $motDePasse = $_POST['motDePasse'];
        
                $hashedPassword = password_hash($motDePasse, PASSWORD_DEFAULT);
        
                $userData = [
                    'nomUtilisateur' => $nomUtilisateur,
                    'prenomUtilisateur' => $prenomUtilisateur,
                    'email' => $email,
                    'villeUtilisateur' => $villeUtilisateur,
                    'codePostalUtilisateur' => $codePostalUtilisateur,
                    'motDePasse' => $hashedPassword,
                ];
        
                try {
                    DB::insert('utilisateur', $userData);
                } catch (PDOException $e) {
                    echo 'PDOException: ' . $e->getMessage();
                    exit();
                }
            } else {
                echo 'Erreur: Données du formulaire manquantes.';
                redirectAndExit(self::URL_AFTER_LOGIN);
            }
        }
        
        // user connexion
        public static function check()
        {
            $email = $_POST['email'] ?? '';
            $motDePasse = $_POST['motDePasse'] ?? '';

            // Validation
            if (!self::validateCredentials($email, $motDePasse)) {
                errors("Le champs d'e-mail doit avoir au moins 6 charactères.");
                errors("Le champs de mot de passe doit avoir au moins 8 charactères");
                redirectAndExit(self::URL_LOGIN);
            }

            // Check DB
            $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :email;", ['login' => $email]);
            if ($users === false) {
                errors('Une erreur est survenue. Veuillez ré-essayer plus tard.');
                redirectAndExit(self::URL_LOGIN);
            }

            // Check user retrieved
            if (count($users) >= 1) {
                $user = $users[0];

                // Version 2: with password hashing
                if (password_verify($motDePasse, $user['password'])) {
                    $_SESSION[Auth::getSessionUserIdKey()] = $user['id'];
                    redirectAndExit(self::URL_AFTER_LOGIN);
                }
            }

            errors("Les identifiants ne correspondes pas.");
            redirectAndExit(self::URL_LOGIN);
        }

}