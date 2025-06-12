<?php

namespace Commands;

class ViewCommand
{
    public static function handle($name)
    {
        if (!$name) {
            echo "\n    ❌ Missing view name.\n\n";
            return;
        }

        $file = __DIR__ . "/../views/{$name}.php";
        if (!file_exists($file)) {
            file_put_contents($file, "<h1>This is the {$name} view</h1>");
            echo "\n    ✅ View '{$name}' created at views/{$name}.php\n\n";
        } else {
            echo "\n    ⚠️ View '{$name}' already exists.\n\n";
        }
    }
}
