<?php

class Auth {
   

    const SESSION_KEY = 'current_user_id';

    
        private static ?array $user = null;
    
        public static function getCurrentUser(): ?array
        {
            $id = self::getSessionUserId();
    
            if (self::$user === null && $id) {
                self::$user = DB::fetch(
                    "SELECT * FROM utilisateur WHERE id = :id LIMIT 1",
                    ['id' => $id]
                );
    
                if (self::$user === false) {
                    self::$user = null;
                } else if (self::$user) {
                    self::$user = self::$user[0] ?? null;
    
                    // Not found in records
                    if (empty(self::$user)) {
                        self::removeSessionUserId();
                    }
                }
            }
    
            return self::$user;
        }
    
        public static function isAuthOrRedirect() : void
        {
            // Check user is auth
            if (!Auth::getCurrentUser()) {
                // Not Auth Or account not exists
                errors('Vous devez être connecté pour accèder à cette page.');
                redirectAndExit('/login.php');
            }
        }
    
        public static function isGuestOrRedirect() : void
        {
            // Check user is guest (invité)
            if (Auth::getCurrentUser()) {
                redirectAndExit('/index.php');
            }
        }
    
        public static function getSessionUserIdKey() : string
        {
            return self::SESSION_KEY;
        }
    
        public static function getSessionUserId() : ?int
        {
            return $_SESSION[self::getSessionUserIdKey()] ?? null;
        }
    
        public static function removeSessionUserId() : void
        {
            unset($_SESSION[self::getSessionUserIdKey()]);
        }
        
        public static function registerUser(): void
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
        
        
        public static function loginUser()
        {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['motDePasse'])) {
                $email = $_POST['email'];
                $motDePasse = $_POST['motDePasse'];
    
                // Validation des données du formulaire
                if (empty($email) || empty($motDePasse)) {
                    $_SESSION['errors'] = displayErrorsAndMessages();
                    self::isGuestOrRedirect();
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
    
        
