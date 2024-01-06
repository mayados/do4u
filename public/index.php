<?php
namespace Public\Handlers;
namespace Helpers\class;
use Controllers;



require_once __DIR__.'/../bootstrap/app.php';

// Guest or Auth allowed


$controller = new Controllers\HomeController();
$controller->index();

// Remove errors, success and old data
App::terminate();