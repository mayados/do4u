<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest

$parametersController = new App\Controllers\MyProfileController();
$parametersController->renderMenu();
$parametersController->showMyParameters();
$parametersController->renderFooter();

// Remove errors, success and old data
App::terminate();
