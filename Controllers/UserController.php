<?php

namespace Controllers;
use Controllers\ComponentController;

class UserController extends Controller
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/user-handler.php';

    private $componentController;

    public function __construct(ComponentController $componentController) {
        $this->componentController = $componentController;
    }
    
    public function showMyProfile()
    {
        $this->render('myProfile');
    }
    
    public function showUserProfile()
    {
        $this->render('userProfile');
    }

    public function showMyParameters()
    {
        $this->render('parameters');
    }
    public function showMenu() {
        
        $this->componentController->renderHeader();
        
    }
    public function showFooter(){
        $this->componentController->renderFooter();
    }

    public function showInscription() : void
    {
        $this->render('inscription');
    }

}
