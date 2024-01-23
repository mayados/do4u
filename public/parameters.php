<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isAuthOrRedirect();

$parametersController = new App\Controllers\MyProfileController();
$parametersController->renderMenu();
$parametersController->showMyParameters();
$parametersController->renderFooter();

// Remove errors, success and old data
App::terminate();
