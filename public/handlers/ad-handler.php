<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;

// Remove errors, success and old data
App::terminate();

// Unknown action
redirectAndExit(Controllers\AuthController::URL_AFTER_LOGOUT);
