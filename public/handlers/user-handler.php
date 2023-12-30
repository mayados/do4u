<?php
require_once __DIR__.'/../../bootstrap/app.php';
require_once base_path('Controllers/UserController.php');



// Remove errors, success and old data
App::terminate();

// Unknown action
redirectAndExit(Controllers\AuthController::URL_AFTER_LOGOUT);
