<?php
namespace Public\handlers; 

use Controller\AuthController;
use Controller\HomeController;

session_start();

$aCtrl = new AuthController();
$hCtrl = new HomeController();

if(isset($_GET["action"])) {
    switch($_GET["action"]) {

        // afficher les formulaires
        case "formRegister" : $sCtrl->formRegister(); break;
        case "formLogin" : $sCtrl->formLogin(); break;

        // actions du SecurityController
        case "register" : $sCtrl->register(); break;
        case "login" : $sCtrl->login(); break;
        case "logout" : $sCtrl->logout(); break;

        // actions du HomeController
        case "home" : $hCtrl->home(); break;
        default : $hCtrl->home(); break;
    } 
} else {
    $hCtrl->home();
}