<?php
require_once __DIR__.'/../bootstrap/app.php';

$adsController = new App\Controllers\AdsController();
$adsController->renderMenu();
$adsController->getAll();
$adsController->renderFooter();

// Remove errors, success, and old data
App::terminate();





