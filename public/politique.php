<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use Controllers\ComponentController;
use Controllers\HomeController;

// Check only if guest
Auth::isGuestOrRedirect();

$componentController = new ComponentController();

$controller = new HomeController($componentController);
$controller->renderHeader();
$controller->showPolitiquePage();
$controller->renderFooter();

// Remove errors, success and old data
App::terminate();
