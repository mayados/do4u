<?php
namespace App\Controllers;
use Controllers\ComponentController;

class ContactController extends Controller
{
    const URL_CREATE = '/views/creationAd.php';
    const URL_INDEX = '/views/index.php';
    const URL_HANDLER = '/handlers/ad-handler.php';


  
    public function showContactPage() {
        require_once __DIR__ . '/../../views/contact.php';
    }

}