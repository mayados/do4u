<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

$usercontroller = new App\Controllers\UserController();
$usercontroller->renderHeader();
$usercontroller->showUserProfile();
$usercontroller->renderFooter();

// Remove errors, success and old data
App::terminate();
