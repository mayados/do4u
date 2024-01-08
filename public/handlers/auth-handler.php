<?php
namespace Public\handlers;

use helpers\class\Auth;
use helpers\class\App;
use Controllers\AuthController;
use Controllers;

require_once 'path/to/helpers/redirect_functions.php';

if (!empty($_POST['action'])) {
    $controller = new Controllers\AuthController($componentController);

    if ($_POST['action'] === 'store') {
        Auth::isGuestOrRedirect();
        $controller->store();
    } elseif ($_POST['action'] === 'check') {
        Auth::isGuestOrRedirect();
        $controller->check();
    } elseif ($_POST['action'] === 'logout') {
        Auth::isAuthOrRedirect();
        $controller->logout();
    }
}

App::terminate();

redirectAndExit(AuthController::URL_AFTER_LOGOUT);
