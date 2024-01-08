<?php

namespace Controllers;
use Controllers\ComponentController;


class HomeController extends Controller
{
    private $componentController;


    public function __construct(ComponentController $componentController) {
        $this->componentController = $componentController;
    }
  

    public function showMenu() {
        
        $this->componentController->renderHeader();
        
    }  
    public function index() {
   
        require_once __DIR__ . '/../views/index.php';
       
    }
    public function showFooter(){
        $this->componentController->renderFooter();
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

