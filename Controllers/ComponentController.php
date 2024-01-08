<?php
namespace Controllers;

class ComponentController
{
    public function renderHeader(): void
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'menu.php';
    }

    public function renderFooter(): void
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'footer.php';
    }
}
