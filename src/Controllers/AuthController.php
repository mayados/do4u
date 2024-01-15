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
                    require_once __DIR__ . '/../../views/auth/login.php';
                } catch (PDOException $e) {
                    echo 'PDOException: ' . $e->getMessage();
                    exit();
                }
            } else {
                echo 'Erreur: Données du formulaire manquantes.';
            }
        }
        
        // user connexion
        public static function check()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['motDePasse'])) {
                $email = $_POST['email'];
                $motDePasse = $_POST['motDePasse'];

                // Validation des données du formulaire
                if (empty($email) || empty($motDePasse)) {
                    $_SESSION['errors'] = displayErrorsAndMessages();
                    Auth::isGuestOrRedirect();
                    require_once __DIR__ . '/../../views/auth/login.php';
                    exit();
                }

                $db = DB::getDB();

                $query = $db->prepare("SELECT * FROM utilisateur WHERE email = :email LIMIT 1");
                $query->bindParam(':email', $email, PDO::PARAM_STR);
                $query->execute();

                $user = $query->fetch(PDO::FETCH_ASSOC);

                if ($user && password_verify($motDePasse, $user['motDePasse'])) {
                    $_SESSION['user_id'] = $user['id']; 
                    require_once __DIR__ . '/../../views/myProfile.php';
                    exit();
                
                } else {
                    $_SESSION['errors'] = displayErrorsAndMessages();
                    require_once __DIR__ . '/../../views/auth/login.php';
                    exit();
                }

                $db = null;
            }
        }
}