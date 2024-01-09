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
     public function cguPage() {
        require_once __DIR__ . '/../views/cgu.php';
    }
    public function showMyParameters() {
        require_once __DIR__ . '/../views/parameters.php';
    }
    public function showPolitiquePage() {
        require_once __DIR__ . '/../views/politique.php';
    }
}

