<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// namespace Public\handlers;

use helpers\class\Auth;
use helpers\class\App;
use Controllers\AdsController;
use Controllers\ComponentController;

// Check only if guest
Auth::isGuestOrRedirect();

$componentController = new ComponentController();

$controller = new AdsController($componentController);
$controller->showMenu();
$controller->showModificationPage();
$controller->showFooter();

// Remove errors, success, and old data
App::terminate();


