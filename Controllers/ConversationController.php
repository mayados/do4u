<?php
namespace Controllers;
use Controllers\ComponentController;

class ConversationController
{
    // const URL_CREATE = '/views/creationAd.php';
    // const URL_INDEX = '/views/index.php';
    // const URL_HANDLER = '/handlers/ad-handler.php';
    private $componentController;

    public function __construct(ComponentController $componentController) {
        $this->componentController = $componentController;
    }
    public function showConversationPage() {
        require_once __DIR__ . '/../views/conversation.php';
    }
    public function showMenu() {
        
        $this->componentController->renderHeader();
        
    }
    public function showFooter(){
        $this->componentController->renderFooter();
    } 
}
