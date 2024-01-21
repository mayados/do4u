<?php
require_once __DIR__.'/../../bootstrap/app.php'; 


$controller = new \App\Controllers\AdsController();
 


if (!empty($_POST['action'])) {
    $controller = new App\Controllers\AdsController();

    if ($_POST['action'] === 'createAnnonce') {
       
        $controller->createAnnonce();
        redirectAndExit(self::URL_ADS);
    } elseif ($_POST['action'] === 'updateAnnonce') {
        
        $controller->updateAnnonce($idAnnonce); 
        redirectAndExit(self::URL_DETAIL);
    } elseif ($_POST['action'] === 'deleteAnnonce') {
        
        $controller->deleteAnnonce($idAnnonce);
        redirectAndExit(self::URL_PROFIL);
    }
}

redirectAndExit(self::URL_ADS);
// Remove errors, success and old data
App::terminate();


