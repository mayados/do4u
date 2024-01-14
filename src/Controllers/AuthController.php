<?php
namespace App\Controllers;
use Auth;

class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/register.php';
    const URL_LOGIN = '/login.php';
    const URL_AFTER_LOGIN = '/ads.php';
    const URL_AFTER_LOGOUT = '/index.php';
   
        public function formRegister() {
            $auth = new Auth();
            $auth->registerUser();
            
            require_once __DIR__ . '/../../views/auth/register.php';
        }
    
        public function formLogin() {
          
            $auth = new Auth();
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