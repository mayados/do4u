<?php
namespace App\Controllers;
use DB;
use Auth;

class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/inscription.php';
    const URL_LOGIN = '/connexion.php';
    const URL_AFTER_LOGIN = '/index.php';
    const URL_AFTER_LOGOUT = '/';
   
        public function formRegister() {
            $auth = new Auth();
            $auth->registerUser();
            
            require_once __DIR__ . '/../../views/auth/register.php';
        }
    
        public function formLogin() {
          
            if (isset($_SESSION['user'])) {
                header('Location: ads.php');
                exit();
            }  $auth = new Auth();
            $auth->loginUser();
            require_once __DIR__ . '/../../views/auth/login.php';
        }
 
        public function logout() {
            // détruire les informations de session
            unset($_SESSION["user"]);
            // redirection vers la page d'accueil
            header("Location: index.php?action=index");
        }
  
    }