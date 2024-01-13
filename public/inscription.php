<?php
require_once __DIR__.'/../bootstrap/app.php';
use App\Controllers\AuthController;

$authController = new AuthController();
$authController->renderHeader();

$authController->formRegister();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();