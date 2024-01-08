<?php

namespace Controllers;


class HomeController extends Controller
{
  
    public function index() {
   
        require_once __DIR__ . '/../views/index.php';
       
    }

    public function showContactPage(): void
    {
        $this->render('views/contact.php');
        // Le reste du code...
    }

    public function showCguPage(): void
    {
        $this->render('views/cgu.php');
        // Le reste du code...
    }

    public function showPolitiquePage(): void
    {
        $this->render('views/politique.php');
        // Le reste du code...
    }
}

