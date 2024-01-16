<?php
require_once __DIR__.'/../bootstrap/app.php';

use App\Controllers\AuthController;

$authController = new AuthController();
$authController->renderMenu();
$authController->register();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();