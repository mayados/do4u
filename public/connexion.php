<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isGuestOrRedirect();

$authController = new App\Controllers\AuthController();
$authController->renderMenu();
$authController->login();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
