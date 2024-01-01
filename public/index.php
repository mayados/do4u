<?php
require_once __DIR__.'/../bootstrap/app.php';

// Guest or Auth allowed

require_once base_path('Controllers/HomeController.php');
$controller = new Controllers\HomeController();
$controller->index();

// Remove errors, success and old data
App::terminate();
