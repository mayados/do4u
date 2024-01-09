<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\AuthController;
use Controllers\ComponentController;

$componentController = new ComponentController();

$authController = new AuthController($componentController);
$authController->showMenu();
$authController->register();
$authController->showFooter();

// Remove errors, success, and old data
App::terminate();