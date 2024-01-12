<?php
require_once __DIR__.'/../../bootstrap/app.php';


// Remove errors, success and old data
App::terminate();

// Unknown action
Auth::redirectAndExit(App\Controllers\AuthController::URL_AFTER_LOGOUT);
