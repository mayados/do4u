<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

$controller = new App\Controllers\AdsController();
$controller->renderHeader();
$controller->showCreationPage();
$controller->renderFooter();


// Remove errors, success, and old data
App::terminate();

