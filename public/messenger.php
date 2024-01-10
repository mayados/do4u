<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use Controllers\MessengerController;


// Check only if guest
Auth::isGuestOrRedirect();


$MeseengerController = new MessengerController();
// unable to display errors and messages
// $MeseengerController->displayErrorsAndMessages();
$MeseengerController->renderHeader();
$MeseengerController->showMessage();
$MeseengerController->renderFooter();

// Remove errors, success and old data
App::terminate();
