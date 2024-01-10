<?php
require_once __DIR__.'/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use helpers\class\Auth;
use Controllers\UserController;

// Check only if guest
Auth::isGuestOrRedirect();

$usercontroller = new UserController();
$usercontroller->renderHeader();
$usercontroller->showUserProfile();
$usercontroller->renderFooter();

// Remove errors, success and old data
App::terminate();
