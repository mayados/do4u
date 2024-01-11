<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
// Check only if guest 
Auth::isGuestOrRedirect();


$adsController = new App\Controllers\HomeController();
$adsController->renderHeader();
$adsController->cguPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
