<?php
// require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

require_once __DIR__.'/../../bootstrap/app.php';

App::terminate();

// Unknown action
Auth::redirectAndExit(App\Controllers\AuthController::URL_AFTER_LOGOUT);

