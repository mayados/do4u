<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

Auth::isGuestOrRedirect();

$authController = new App\Controllers\AuthController();
$authController->renderHeader();
$authController->login();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
