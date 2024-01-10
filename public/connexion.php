<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\AuthController;


$authController = new AuthController();
$authController->renderHeader();
$authController->login();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
