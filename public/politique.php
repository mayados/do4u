<?php
require_once __DIR__.'/../bootstrap/app.php';

$controller = new App\Controllers\HomeController();
$controller->renderHeader();
$controller->showPolitiquePage();
$controller->renderFooter();

// Remove errors, success and old data
App::terminate();
