<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

// Check only if guest 
Auth::isGuestOrRedirect();


$adsController = new App\Controllers\ContactController();
$adsController->renderHeader();
$adsController->showContactPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
