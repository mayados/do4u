<?php
require_once __DIR__.'/../bootstrap/app.php';

// show inscription just for the users which is not connected
Auth::isGuestOrRedirect();

use App\Controllers\AuthController;

$authController = new AuthController();
$authController->renderMenu();
$authController->register();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
