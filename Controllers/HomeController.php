<?php

namespace Controllers;

require_once 'Controller.php';

use DB;

class HomeController extends Controller
{

    public function index() : void
    {
        require_once base_path('views/index.php');
    }

    public function showContactPage() : void
    {
        require_once base_path('views/contact.php');
    }

    public function showCguPage() : void
    {
        require_once base_path('views/cgu.php');
    }

    public function showPolitiquePage() : void
    {
        require_once base_path('views/politique.php');
    }

}