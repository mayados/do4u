<?php

namespace App\Controllers;
use App\Models\Annonce;

class HomeController extends Controller
{
  
    public function index() {
        $annonceOffre = Annonce::getOffre();
        $annonceDemande = Annonce::getDemmande();
        require_once base_path('views/index.php');
    }

    public function showContactPage(): void
    {
        require_once base_path('views/contact.php');
      
    }
     public function cguPage() {
        require_once base_path('views/cgu.php');
    }
    public function showMyParameters() {
        require_once base_path('views/parameters.php');
    }
    public function showPolitiquePage() {
        require_once base_path('views/politique.php');
    }
}

