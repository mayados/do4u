<?php
require_once __DIR__.'/../bootstrap/app.php';

Auth::isAuthOrRedirect();

$adscontroller = new App\Controllers\AdsController();
$adscontroller->renderMenu();
$adscontroller->showModificationPage();
$adscontroller->renderFooter();

// Remove errors, success, and old data
App::terminate();


