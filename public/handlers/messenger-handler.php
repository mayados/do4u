<?php
use helpers\class\App;
use helpers\class\Auth;
require_once __DIR__ . '/../vendor/autoload.php';



// Remove errors, success and old data
App::terminate();

// Unknown action
Auth::redirectAndExit(Controllers\AuthController::URL_AFTER_LOGOUT);
