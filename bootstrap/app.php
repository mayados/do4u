<?php

define('APP_BASE_PATH', realpath(__DIR__.'/../'));

// Import function helpers
require_once __DIR__.'/../helpers/path_functions.php';
require_once __DIR__.'/../helpers/html_functions.php';
require_once __DIR__.'/../helpers/redirect_functions.php';
require_once __DIR__.'/../helpers/session_functions.php';

// Import class helpers
require_once __DIR__.'/../helpers/class/App.php';
require_once __DIR__.'/../helpers/class/DB.php';
require_once __DIR__.'/../helpers/class/Auth.php';

// Import models
require_once __DIR__.'/../Models/CategorieModel.php';

// Import controllers
require_once __DIR__.'/../Controllers/CategorieController.php';


// ... other includes

// Start sessions
session_start();
