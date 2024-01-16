<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest

$usercontroller = new App\Controllers\UserController();
$usercontroller->renderMenu();
$usercontroller->showUserProfile();
$usercontroller->renderFooter();

// Remove errors, success and old data
App::terminate();
