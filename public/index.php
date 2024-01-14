<?php
require_once __DIR__.'/../bootstrap/app.php';

$homeController = new App\Controllers\HomeController();
$homeController->renderMenu();
$homeController->index();
$homeController->renderFooter();

// Remove errors, success, and old data
App::terminate();
