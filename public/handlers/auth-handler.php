<?php
namespace Public\handlers;

use helpers\class\Auth;
use helpers\class\App;
use Controllers\AuthController;

// If your project is configured with Composer autoloading, you might not need the next line.
require_once __DIR__ . '/../vendor/autoload.php';



if (!empty($_POST['action'])) {
    $controller = new AuthController();

    switch ($_POST['action']) {
        case 'login':
            Auth::isGuestOrRedirect();
            $controller->login();
            break;
        case 'register':
            Auth::isGuestOrRedirect();
            $controller->register();
            break;
        case 'logout':
            Auth::isAuthOrRedirect();
            $controller->logout();
            break;
        default:
            // Handle unknown action
            break;
    }
}

App::terminate();




