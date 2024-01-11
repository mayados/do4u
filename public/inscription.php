<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

$authController = new App\Controllers\AuthController();
$authController->renderHeader();
$authController->register();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();