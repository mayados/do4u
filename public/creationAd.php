<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isAuthOrRedirect();

// Check only if guest


$controller = new App\Controllers\AdsController();
$controller->renderMenu();
$controller->showCreationPage();
$controller->renderFooter();


// Remove errors, success, and old data
App::terminate();

