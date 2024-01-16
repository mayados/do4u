<?php
require_once __DIR__.'/../bootstrap/app.php';
// Check only if guest 

$adsController = new App\Controllers\HomeController();
$adsController->renderMenu();
$adsController->cguPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
