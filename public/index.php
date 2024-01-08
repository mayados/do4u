<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\HomeController;
use Controllers\ComponentController;

$componentController = new ComponentController();

$homeController = new HomeController($componentController);
$homeController->showMenu();
$homeController->index();
$homeController->showFooter();

// Remove errors, success, and old data
App::terminate();
