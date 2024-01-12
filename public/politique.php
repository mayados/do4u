<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

$controller = new App\Controllers\HomeController();
$controller->renderHeader();
$controller->showPolitiquePage();
$controller->renderFooter();

// Remove errors, success and old data
App::terminate();
