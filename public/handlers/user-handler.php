<?php
namespace handlers;
use helpers\class\App;
use helpers\class\Auth;
use Controllers\AuthController;



// Remove errors, success and old data
App::terminate();

// Unknown action
Auth::redirectAndExit(AuthController::URL_AFTER_LOGOUT);
