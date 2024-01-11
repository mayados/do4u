<?php

namespace App\Controllers;


class MessengerController extends Controller
{
   

    public function showMessage()
    {
        require_once base_path('views/messenger.php');
    }

}
