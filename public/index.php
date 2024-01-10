<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\HomeController;




$homeController = new HomeController();
$homeController->renderHeader();
$homeController->index();
$homeController->renderFooter();

// Remove errors, success, and old data
App::terminate();
