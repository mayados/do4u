<?php
require_once __DIR__.'/../../bootstrap/app.php';

if (!empty($_POST['action'])) {
    if ($_POST['action'] === 'login') {
        $authController->isGuestOrRedirect(); // Check guest only
        $authController->login();
    } elseif ($_POST['action'] === 'register') {
        $authController->isGuestOrRedirect(); // Check guest only
        $authController->register();
    } elseif ($_POST['action'] === 'logout') {
        $authController->isAuthOrRedirect(); // Check auth
        $authController->logout();
    }
}

// Remove errors, success, and old data
App::terminate();

// Unknown action
Auth::redirectAndExit(App\Controllers\AuthController::URL_AFTER_LOGOUT);




