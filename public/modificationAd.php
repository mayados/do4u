<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest

$adscontroller = new App\Controllers\AdsController();
$adscontroller->renderMenu();
$adscontroller->showModificationPage();
$adscontroller->renderFooter();

// Remove errors, success, and old data
App::terminate();


