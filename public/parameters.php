<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$parametersController = new App\Controllers\UserController();
$parametersController->renderHeader();
$parametersController->showMyParameters();
$parametersController->renderFooter();

// Remove errors, success and old data
App::terminate();
