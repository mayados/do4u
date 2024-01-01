<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

require_once base_path('Controllers/UserController.php');
$controller = new Controllers\UserController();
$controller->showMyParameters();

// Remove errors, success and old data
App::terminate();
