<?php

namespace Commands;

class MigrationCommand
{
    public static function handle($name, $options)
    {
        if (!$name) {
            echo "\n    ❌ Missing migration name.\n\n";
            return;
        }

        $file = date('Ymd_His') . "_{$name}.sql";
        $table = preg_replace('/^(create|drop|update)_/', '', strtolower($name));
        $path = __DIR__ . "/../database/migrations/{$file}";

        $template = "-- Migration: $name\n\n";
        if (($options['type'] ?? '') === 'create') {
            $template .= "CREATE TABLE IF NOT EXISTS {$table} (\n    id INT AUTO_INCREMENT PRIMARY KEY,\n    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP\n);";
        } else {
            $template .= "-- Write your SQL here";
        }

        file_put_contents($path, $template);
        echo "\n    ✅ Migration '{$file}' created in database/migrations/\n\n";
    }
}
