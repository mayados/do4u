<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\HomeController;
use Controllers\ComponentController;
use helpers\class\Auth;
// Check only if guest 
Auth::isGuestOrRedirect();

$componentController = new ComponentController();

$adsController = new HomeController($componentController);
$adsController->renderHeader();
$adsController->cguPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
