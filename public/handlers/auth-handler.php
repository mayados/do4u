<?php
namespace Public\handlers;

use helpers\class\Auth;
use helpers\class\App;
use Controllers\AuthController;

require_once 'path/to/helpers/redirect_functions.php';

if (!empty($_POST['action'])) {
    $controller = new AuthController($componentController);

    switch ($_POST['action']) {
        case 'store':
            Auth::isGuestOrRedirect();
            $controller->store();
            break;
        case 'check':
            Auth::isGuestOrRedirect();
            $controller->check();
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

redirectAndExit(AuthController::URL_AFTER_LOGOUT);

