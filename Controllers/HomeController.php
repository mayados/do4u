<?php

namespace Controllers;


class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('views/index.php');
        // Le reste du code...
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

