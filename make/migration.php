<?php
// create_migration.php

if ($argc < 2) {
    echo "ℹ️  Usage: php create_migration.php <migration_name>\n";
    exit(1);
}

$name = preg_replace('/[^a-z0-9_]/i', '_', $argv[1]); // Sanitize
$timestamp = date('Ymd_His');
$filename = "database/migrations/{$timestamp}_{$name}.sql";

$parts = explode('_', $name);
$action = $parts[0] ?? '';
$tableName = $parts[1] ?? 'table';

$template = "-- Migration: {$name}\n-- Created at: " . date('Y-m-d H:i:s') . "\n\n";

switch ($action) {
    case 'create':
        $template .= "CREATE TABLE IF NOT EXISTS {$tableName} (\n";
        $template .= "    id INT AUTO_INCREMENT PRIMARY KEY,\n";
        $template .= "    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP\n";
        $template .= ");\n";
        break;

    case 'drop':
        $template .= "DROP TABLE IF EXISTS {$tableName};\n";
        break;

    case 'alter':
        $template .= "ALTER TABLE {$tableName} \n";
        $template .= "    -- ADD COLUMN column_name TYPE, \n";
        $template .= "    -- DROP COLUMN column_name, \n";
        $template .= "    -- MODIFY COLUMN column_name TYPE;\n";
        break;

    default:
        $template .= "-- Write your SQL here\n";
}

if (!is_dir('migrations')) {
    mkdir('migrations', 0777, true);
}

file_put_contents($filename, $template);
echo "✅ Migration created: {$filename}\n";
