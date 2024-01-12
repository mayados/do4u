<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$controller = new App\Controllers\AdsController();
$controller->renderHeader();
$controller->showCreationPage();
$controller->renderFooter();


// Remove errors, success, and old data
App::terminate();

