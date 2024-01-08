<?php

namespace Controllers;
use Controllers\ComponentController;

class MessengerController
{
    // const URL_CREATE = '/views/creationAd.php';
    // const URL_INDEX = '/views/index.php';
    // const URL_HANDLER = '/handlers/messenger-handler.php';

    public function showMessage()
    {
        require_once __DIR__ . '/../views/messenger.php';
    }
    public function showMenu() {
        $componentController = new ComponentController();
        $componentController->renderHeader();
    }
    public function showFooter(){
        $componentController = new ComponentController();
        $componentController->renderFooter();
    }

}
