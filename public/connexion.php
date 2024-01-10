<?php
require_once __DIR__ . '/../vendor/autoload.php'; 
use helpers\class\App;
use Controllers\AuthController;
use helpers\class\Auth;

Auth::isGuestOrRedirect();

$authController = new AuthController();
$authController->renderHeader();
$authController->login();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
