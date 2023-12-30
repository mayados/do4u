<?php

namespace Controllers;

require_once 'Controller.php';

use Auth;
use DB;

class AuthController extends Controller
{
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/register.php';
    const URL_LOGIN = '/login.php';
    const URL_AFTER_LOGIN = '/index.php';
    const URL_AFTER_LOGOUT = '/connexion.php';

    public function login() : void
    {
        $actionUrl = self::URL_HANDLER;
        require_once base_path('views/connexion.php');
    }

    public function register() : void
    {
        $actionUrl = self::URL_HANDLER;
        require_once base_path('views/inscription.php');
    }


}


