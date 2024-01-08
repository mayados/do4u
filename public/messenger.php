<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use helpers\session_functions;
use Controllers\MessengerController;
use Controllers\ComponentController;

// Check only if guest
Auth::isGuestOrRedirect();

$componentController = new ComponentController();

$MeseengerController = new MessengerController($componentController);
// unable to display errors and messages
// $MeseengerController->displayErrorsAndMessages();
$MeseengerController->showMenu();
$MeseengerController->showMessage();
$MeseengerController->showFooter();

// Remove errors, success and old data
App::terminate();
