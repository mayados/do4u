<?php


function base_path(string $path = ''): string
{
    // Ajouter automatiquement un /
    if ($path && $path[0] !== '/') {
        $path = '/' . $path;
    }

    // Utiliser la constante APP_BASE_PATH s'il est défini
    if (defined('APP_BASE_PATH')) {
        return APP_BASE_PATH . $path;
    } else {
        // Utiliser __DIR__ si APP_BASE_PATH n'est pas défini
        return __DIR__ . $path;
    }
}


