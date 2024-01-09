<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use Controllers\ComponentController;
use Controllers\HomeController;
use Controllers\UserController;

// Check only if guest
Auth::isGuestOrRedirect();

$componentController = new ComponentController();
$parametersController = new HomeController($componentController);

$userController = new ComponentController();
$parametersController = new UserController($userController);
$parametersController->showMenu();
$parametersController->showMyParameters();
$parametersController->showFooter();

// Remove errors, success and old data
App::terminate();
