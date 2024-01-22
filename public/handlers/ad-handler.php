<?php
require_once __DIR__.'/../../bootstrap/app.php'; 


if (!empty($_POST['action'])) {
    $controller = new App\Controllers\AdsController();

    if ($_POST['action'] === 'createAnnonce') {
       Auth::isAuthOrRedirect();  
        $controller->createAnnonce();
    } elseif ($_POST['action'] === 'updateAnnonce') {
        Auth::isAuthOrRedirect(); 
        $controller->updateAnnonce(); 

    } elseif ($_POST['action'] === 'delete') {
        Auth::isAuthOrRedirect(); 
        $controller->deleteAnnonce();
    }

}


// Remove errors, success and old data
App::terminate();


// Unknown action
redirectAndExit(App\Controllers\MyProfileController::URL_INDEX);

