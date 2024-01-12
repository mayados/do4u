<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$adscontroller = new App\Controllers\AdsController();
$adscontroller->renderHeader();
$adscontroller->showModificationPage();
$adscontroller->renderFooter();

// Remove errors, success, and old data
App::terminate();


