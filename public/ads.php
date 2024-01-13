<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();


$adsController = new App\Controllers\AdsController();
$adsController->renderHeader();
$adsController->getAll();
$adsController->renderFooter();

// Remove errors, success, and old data
App::terminate();





