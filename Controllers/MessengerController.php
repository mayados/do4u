<?php

namespace Controllers;

require_once __DIR__.'/../Models/Message.php';
require_once __DIR__.'/../Models/Conversation.php';

use DB;
use Models\Message;
use Models\Annonce;

class MessengerController
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/messenger-handler.php';

    public function index()
    {
        require_once base_path('views/messenger.php');
    }

    public function showConversation()
    {
        require_once base_path('views/conversation.php');
    }

}
