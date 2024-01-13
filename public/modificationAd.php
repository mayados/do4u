<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

$adscontroller = new App\Controllers\AdsController();
$adscontroller->renderHeader();
$adscontroller->showModificationPage();
$adscontroller->renderFooter();

// Remove errors, success, and old data
App::terminate();


