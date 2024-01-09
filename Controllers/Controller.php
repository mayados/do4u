<?php

namespace Controllers;


abstract class Controller {
    const URL_HANDLER = '/handlers/auth-handler.php';
    private $componentController;

    public function __construct(ComponentController $componentController) {
        $this->componentController = $componentController;
    }

    public function showMenu() {
        $this->componentController->renderHeader();
    }

    public function render(string $view, array $data = []): void
    {
        extract($data); // Convert array key:value to $key = value variables
    
        $viewPath = __DIR__ . '/../views/' . $view . '.php';
    
        if (file_exists($viewPath)) {
            include $viewPath;
        } else {
            // Handle the case where the view file doesn't exist
            echo "Error: View file not found - " . $viewPath;
        }
    }
    public function renderView(string $view): void
    {
        $actionUrl = self::URL_HANDLER;
        require_once __DIR__ . "/../views/{$view}";
    }
    


    public function showFooter() {
        $this->componentController->renderFooter();
    }
}
