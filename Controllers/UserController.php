<?php

namespace Controllers;


class UserController extends Controller
{
    const URL_CREATE = '';
    const URL_INDEX = '';
    const URL_HANDLER = '/handlers/user-handler.php';

    
    public function showMyProfile()
    {
        $this->render('myProfile');
    }
    
    public function showUserProfile() : void
    {
        $this->render('userProfile');
    }

    public function showMyParameters()
    {
        $this->render('parameters');
    }
 

    public function showInscription() : void
    {
        $this->render('inscription');
    }

}
