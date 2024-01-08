<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
// use helpers\class\App;
use Controllers\MyProfileController;
use Controllers\ComponentController;

// Auth::isGuestOrRedirect();
$componentController = new ComponentController();

$adsController = new MyProfileController($componentController);
$adsController->showMenu();
$adsController->showMyProfile();
$adsController->showFooter();

// Remove errors, success, and old data
// App::terminate();