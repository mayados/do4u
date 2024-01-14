<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

$MeseengerController = new App\Controllers\MessengerController();
$MeseengerController->renderMenu();
$MeseengerController->showMessage();
$MeseengerController->renderFooter();

// Remove errors, success and old data
App::terminate();
