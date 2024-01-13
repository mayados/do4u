<?php
require_once __DIR__ . '/../vendor/autoload.php'; 

// Remove errors, success and old data
App::terminate();

// Unknown action
redirectAndExit(App\Controllers\AuthController::URL_AFTER_LOGOUT);
