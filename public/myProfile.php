<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isAuthOrRedirect();

$adsController = new App\Controllers\MyProfileController();
$adsController->renderMenu();
$adsController->showMyProfile();
$adsController->renderFooter();

// Remove errors, success, and old data
App::terminate();
