<?php

namespace Controllers;
use Controllers\ComponentController;

class UserController
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
        require_once __DIR__.'/../views/myProfile.php';
    }
    
    public function showUserProfile()
    {
        require_once __DIR__.'/../views/userProfile.php';
    }

    public function showMyParameters()
    {
        require_once __DIR__. '/../views/parameters.php';
    }
    public function showMenu() {
        
        $this->componentController->renderHeader();
        
    }
    public function showFooter(){
        $this->componentController->renderFooter();
    }


}
