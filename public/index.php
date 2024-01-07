<?php
namespace Public\handlers;
use Controllers;
use Helpers\class\App;
use Helpers\path_functions;


require_once __DIR__ . '/../vendor/autoload.php';

use Controllers\AdsController;
use Controllers\ComponentController;

$componentController = new ComponentController();
$adsController = new AdsController($componentController);
$adsController->showAdsByCategorie();



$controller = new Controllers\HomeController();
$controller->index();

// Remove errors, success and old data
App::terminate();