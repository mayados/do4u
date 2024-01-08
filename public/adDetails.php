<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

use Controllers\AdsController;
use Controllers\ComponentController;
use helpers\class\App;
use helpers\class\Auth;

$componentController = new ComponentController();

// Check only if guest
Auth::isGuestOrRedirect();

$adsController = new AdsController($componentController);
$adsController->showMenu();
$adsController->showAdDetails();
$adsController->showFooter();

// Remove errors, success, and old data
App::terminate();
