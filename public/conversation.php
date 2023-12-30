<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

require_once base_path('Controllers/MessengerController.php');
$controller = new Controllers\MessengerController();
$controller->showConversation();

// Remove errors, success and old data
App::terminate();
