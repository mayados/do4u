<?php
require_once __DIR__.'/../bootstrap/app.php';
// Check only if guest 
Auth::isGuestOrRedirect();


$adsController = new App\Controllers\HomeController();
$adsController->renderHeader();
$adsController->cguPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
