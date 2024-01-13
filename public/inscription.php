<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use App\Controllers\AuthController;

$authController = new AuthController();
$authController->renderHeader();

$authController->formRegister();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();