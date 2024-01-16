<?php
require_once __DIR__.'/../bootstrap/app.php';

// Check only if guest
// Auth::isGuestOrRedirect();

$adsController = new App\Controllers\ConversationController();
$adsController->renderMenu();
$adsController->showConversationPage();
$adsController->renderFooter();

// Remove errors, success and old data
App::terminate();
