<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\AdsController;

use helpers\class\Auth;

// Check only if guest
Auth::isGuestOrRedirect();


$adsController = new AdsController();
$adsController->renderHeader();
$adsController->getAll();
$adsController->renderFooter();

// Remove errors, success, and old data
App::terminate();





