<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\ConversationController;
use Controllers\ComponentController;

// Check only if guest
// Auth::isGuestOrRedirect();

$componentController = new ComponentController();

$adsController = new ConversationController($componentController);
$adsController->showMenu();
$adsController->showMyProfile();
$adsController->showFooter();
// Remove errors, success and old data
App::terminate();
