<?php
if (!function_exists('redirect')) {
    function redirect(string $url): void
    {
       header("Location: $url");
        exit();
    }
}

if (!function_exists('redirectAndExit')) {
    function redirectAndExit(string $url): void
    {
        redirect($url);
    }
}
