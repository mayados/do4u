<?php
require_once __DIR__.'/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$usercontroller = new App\Controllers\UserController();
$usercontroller->renderHeader();
$usercontroller->showUserProfile();
$usercontroller->renderFooter();

// Remove errors, success and old data
App::terminate();
