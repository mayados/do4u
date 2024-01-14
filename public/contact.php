<?php
require_once __DIR__.'/../bootstrap/app.php';

$adsController = new App\Controllers\ContactController();
$adsController->renderMenu();
$adsController->showContactPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
