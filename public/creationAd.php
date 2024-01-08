<?php
namespace Public\handlers;
use helpers\class\Auth;
use helpers\class\App;
use Controllers;

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../bootstrap/app.php';



// Check only if guest
Auth::isGuestOrRedirect();

$controller = new Controllers\AdsController($componentController);
$controller->showCreationPage();

// Remove errors, success, and old data
App::terminate();

