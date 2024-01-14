<?php

namespace App\Controllers;


abstract class Controller {
    const URL_HANDLER = '/handlers/auth-handler.php';
   
  

    public function renderMenu(): void
    {
        require_once __DIR__ . '/../../views/components/menu.php';
    }
    public function renderMenu_unconnected(): void
    {

        require_once __DIR__ . '/../../views/components/menu-unconnected.php';
    }
    public function renderMenu_without_searchbar(): void
    {
        require_once __DIR__ . '/../../views/components/menu-without-searchbar.php';
    }
    public function render(string $view, array $data = []): void
    {
        extract($data); // Convert array key:value to $key = value variables
    
        $viewPath = __DIR__ . '/../../views/' . $view . '.php';
    
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
        require_once __DIR__ . "/../../views/{$view}";
    }
    
    public function renderFooter(): void
    {
        require_once __DIR__ . '/../../views/components/footer.php';
    }

    public function errors($message) {
        // Handle errors as needed
        echo $message;
        // You might want to exit or redirect here
        exit;
    }
}
