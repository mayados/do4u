<?php

require_once __DIR__.'/../vendor/autoload.php';

define('APP_BASE_PATH', realpath(__DIR__.'/../'));

// Default locale
define('APP_LOCALE', 'fr'); // fr, en, es, de, ...

// require_once __DIR__.'/../helpers/path_functions.php';
 //require_once __DIR__.'/../helpers/html_functions.php';
 //require_once __DIR__.'/../helpers/redirect_functions.php';
 //require_once __DIR__.'/../helpers/session_functions.php';

// Start sessions
session_start();
