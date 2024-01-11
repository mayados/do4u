<?php
namespace App\Controllers;

class ConversationController extends Controller
{
   
  
    public function showConversationPage() {
        require_once base_path('views/conversation.php');
    }

}
