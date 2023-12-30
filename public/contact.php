<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

require_once base_path('Controllers/HomeController.php');
$controller = new Controllers\HomeController();
$controller->showContactPage();

// Remove errors, success and old data
App::terminate();
