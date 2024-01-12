<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

$homeController = new App\Controllers\HomeController();
$homeController->renderHeader();
$homeController->index();
$homeController->renderFooter();

// Remove errors, success, and old data
App::terminate();
