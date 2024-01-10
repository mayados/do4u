<?php

namespace Controllers;


class MessengerController extends Controller
{
    // const URL_CREATE = '/views/creationAd.php';
    // const URL_INDEX = '/views/index.php';
    // const URL_HANDLER = '/handlers/messenger-handler.php';

    public function showMessage()
    {
        require_once __DIR__ . '/../views/messenger.php';
    }

}
