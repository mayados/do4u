<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$MeseengerController = new App\Controllers\MessengerController();
$MeseengerController->renderHeader();
$MeseengerController->showMessage();
$MeseengerController->renderFooter();

// Remove errors, success and old data
App::terminate();
