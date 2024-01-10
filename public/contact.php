<?php
require_once __DIR__ . '/../vendor/autoload.php'; 
use helpers\class\App;
use Controllers\ContactController;
use helpers\class\Auth;

// Check only if guest 
Auth::isGuestOrRedirect();



$adsController = new ContactController();
$adsController->renderHeader();
$adsController->showContactPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
