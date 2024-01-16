<?php
require_once __DIR__.'/../../bootstrap/app.php'; 

if (!empty($_POST['action'])) {
    $controller = new App\Controllers\AdsController();

    if ($_POST['action'] === 'createAnnonce') {
        Auth::isAuthOrRedirect();
        $controller->createAnnonce();
    } elseif ($_POST['action'] === 'update') {
        Auth::isAuthOrRedirect();
        $controller->updateAnnonce(); 
    } 
   
}

// Remove errors, success and old data
App::terminate();

// Unknown action
redirectAndExit(App\Controllers\AdsController::URL_ADS);
