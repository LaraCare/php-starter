<?php

spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/../'; // root of the project
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = $baseDir . $classPath . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "❌ Autoload failed for class: {$class} at path: {$file}\n";
    }
});
