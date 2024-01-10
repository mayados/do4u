<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

use helpers\class\Auth;
use helpers\class\App;
use Controllers\AdsController;


// Check only if guest
Auth::isGuestOrRedirect();


$adscontroller = new AdsController();
$adscontroller->renderHeader();
$adscontroller->showModificationPage();
$adscontroller->renderFooter();

// Remove errors, success, and old data
App::terminate();


