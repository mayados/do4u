<?php
require_once __DIR__.'/../bootstrap/app.php';

// on vérifie que l'utilisateur est connecté
Auth::isAuthOrRedirect();

$controller = new App\Controllers\AdsController();
$controller->renderMenu();
$controller->showCreationPage();
$controller->renderFooter();


// Remove errors, success, and old data
App::terminate();

