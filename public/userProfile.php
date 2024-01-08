<?php
require_once __DIR__.'/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use Controllers\ComponentController;
use Controllers\UserController;

// Check only if guest
Auth::isGuestOrRedirect();
$CopmonentController = new ComponentController();
$controller = new UserController($CopmonentController);
$controller->showMenu();
$controller->showUserProfile();
$controller->showFooter();

// Remove errors, success and old data
App::terminate();
