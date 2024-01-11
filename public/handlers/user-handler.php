<?php
namespace handlers;
use App;
use Auth;
use App\Controllers\AuthController;



// Remove errors, success and old data
App::terminate();

// Unknown action
Auth::redirectAndExit(AuthController::URL_AFTER_LOGOUT);
