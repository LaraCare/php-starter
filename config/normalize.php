<?php 

// Normalize URI
$uri = $_SERVER['REQUEST_URI'];

// Remove base folder if using subdirectory (like /php-starter/public)
$scriptName = dirname($_SERVER['SCRIPT_NAME']);

if (strpos($uri, $scriptName) === 0) {
    $uri = substr($uri, strlen($scriptName));
}

// Remove query string (if any)
$uri = strtok($uri, '?');
