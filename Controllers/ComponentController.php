<?php

namespace Controllers;

class ComponentController
{
    public function renderHeader(): void
    {
        require_once __DIR__ . '/../../views/components/header.php';
    }

    public function renderFooter(): void
    {
        require_once __DIR__ . '/../../views/components/footer.php';
    }
}
