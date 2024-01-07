<?php
namespace Public\handlers;
namespace helpers\class;
use Controllers;
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
Auth::isGuestOrRedirect();

require_once base_path('Controllers/AdsController.php');
$controller = new Controllers\AdsController();
$controller->showDetails();

// Remove errors, success and old data
App::terminate();
