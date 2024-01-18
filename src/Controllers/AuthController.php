<?php
namespace App\Controllers;
use Auth;
use DB;
use PDOException;

class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/inscription.php';
    const URL_LOGIN = '/connexion.php';
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

        public static function validateCredentials(string $email, string $motDePasse) : bool
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
            $requiredFields = ['nomUtilisateur', 'prenomUtilisateur', 'email', 'villeUtilisateur', 'codePostalUtilisateur', 'motDePasse'];
        
            // Vérifie si toutes les données requises sont présentes
            if (self::arePostFieldsSet($requiredFields)) {
                // Récupération des données du formulaire
                $nomUtilisateur = $_POST['nomUtilisateur'];
                $prenomUtilisateur = $_POST['prenomUtilisateur'];
                $email = $_POST['email'];
                $villeUtilisateur = $_POST['villeUtilisateur'];
                $codePostalUtilisateur = $_POST['codePostalUtilisateur'];
                $motDePasse = $_POST['motDePasse'];
        
                // Hash du mot de passe
                $hashedPassword = password_hash($motDePasse, PASSWORD_DEFAULT);
        
                // Données utilisateur
                $userData = [
                    'nomUtilisateur' => $nomUtilisateur,
                    'prenomUtilisateur' => $prenomUtilisateur,
                    'email' => $email,
                    'villeUtilisateur' => $villeUtilisateur,
                    'codePostalUtilisateur' => $codePostalUtilisateur,
                    'motDePasse' => $hashedPassword,
                ];
        
                try {
                    // Insertion des données dans la base de données
                    DB::insert('utilisateur', $userData);
        
                    // Authentification du nouvel utilisateur
                    $_SESSION[Auth::getSessionUserIdKey()] = $user['idUtilisateur'] = DB::getDB()->lastInsertId();
        
                    // Nettoyer les données du formulaire précédent
                    unset($_SESSION['old']);
        
                    // Message de succès + redirection
                    success('Vous êtes maintenant connecté.');
                    redirectAndExit(self::URL_AFTER_LOGOUT);
                } catch (PDOException $e) {
                    echo 'PDOException: ' . $e->getMessage();
                }
            } else {
                echo 'Erreur: Données du formulaire manquantes.';
                redirectAndExit(self::URL_AFTER_LOGOUT);
            }
        }

        public static function arePostFieldsSet(array $fields): bool
            {
                foreach ($fields as $field) {
                    if (!isset($_POST[$field])) {
                        return false;
                    }
                }
                return true;
            }
        
        // user connexion
        public static function check()
        {
            $email = $_POST['email'] ?? '';
            $motDePasse = $_POST['motDePasse'] ?? '';
            
            $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :email;", ['email' => $email]);
           
            if ($users === false) {
                errors('Une erreur est survenue. Veuillez ré-essayer plus tard.');
                redirectAndExit(self::URL_LOGIN);
            }

            if (count($users) >= 1) {
                $user = $users[0];

                if (password_verify($motDePasse, $user['motDePasse'])) {
                    $_SESSION[Auth::getSessionUserIdKey()] = $user['idUtilisateur'];
                    redirectAndExit(self::URL_AFTER_LOGIN);
                }
            }

            errors("Les identifiants ne correspondes pas.");
            redirectAndExit(self::URL_LOGIN);
        }
}