<?php

if (!function_exists('dd')) {
    function dd(...$vars)
    {
        echo '<pre>';
        foreach ($vars as $var) {
            var_dump($var);
        }
        echo '</pre>';
        die();
    }
}

if (!function_exists('view_path')) {
    function view_path($view)
    {
        return __DIR__ . '/../views/' . $view . '.php';
    }
}

if (!function_exists('redirect')) {
    function redirect($url)
    {
        header("Location: $url");
        exit;
    }
}

function env($key, $default = null)
{
    return $_ENV[$key] ?? $default;
}
