<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer
use helpers\class\App;
use Controllers\AdsController;
use Controllers\ComponentController;

$componentController = new ComponentController();

$adsController = new AdsController($componentController);
$adsController->showMenu();
$adsController->getAll();
$adsController->showFooter();

// Remove errors, success, and old data
App::terminate();





