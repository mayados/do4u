<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\AdsController;
use Controllers\ComponentController;
use helpers\class\Auth;

// Check only if guest
Auth::isGuestOrRedirect();


$controller = new AdsController();
$controller->renderHeader();
$controller->showCreationPage();
$controller->renderFooter();


// Remove errors, success, and old data
App::terminate();

