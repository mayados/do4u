<?php
require_once __DIR__.'/../bootstrap/app.php';

$homeController = new App\Controllers\HomeController();
$homeController->renderHeader();
$homeController->index();
$homeController->renderFooter();

// Remove errors, success, and old data
App::terminate();
