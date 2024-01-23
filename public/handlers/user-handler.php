<?php

require_once __DIR__.'/../../bootstrap/app.php';

Auth::isAuthOrRedirect(); // Check auth

if (!empty($_POST['action'])) {

    $controller = new App\Controllers\MyProfileController();

    if ($_POST['action'] === 'update') {
        $controller->showMyParameters()();
    }
}

// Remove errors, success and old data
App::terminate();

// Unknown action
redirectAndExit(App\Controllers\AuthController::URL_AFTER_LOGOUT);
