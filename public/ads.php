<?php
namespace Public\handlers;
use Controllers\HomeController;
use helpers\class\App;

require_once __DIR__.'/../vendor/autoload.php';



$controller = new HomeController();
$controller->index();


// Remove errors, success, and old data
App::terminate();




