<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Include autoloader if using Composer

// Check only if guest
Auth::isGuestOrRedirect();

$adsController = new App\Controllers\ConversationController();
$adsController->renderHeader();
$adsController->showConversationPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
