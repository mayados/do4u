<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isGuestOrRedirect();

$authController = new App\Controllers\AuthController();
$authController->renderMenu_without_searchbar();
$authController->formLogin();
$authController->renderFooter();

// Remove errors, success, and old data
App::terminate();
