<?php

namespace App\Controllers;


class UserController extends Controller
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/user-handler.php';

    
    public function showMyProfile()
    {
        $this->render('myProfile');
    }
    
    public function showUserProfile() 
    {
       
        require_once __DIR__ . '/../../views/userProfile.php';
    }

}
