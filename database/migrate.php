<?php
// migrate.php

require_once __DIR__ . '/connection.php';

$migrationDir = __DIR__ . '/migrations';
// echo $migrationDir;
// exit;
$files = glob($migrationDir . '/*.sql');
sort($files); // Run in order (001, 002...)

foreach ($files as $file) {
    $sql = file_get_contents($file);
    echo "Running migration: " . basename($file) . "\n";
    
    try {
        $pdo->exec($sql);
        echo "✅ Success\n\n";
    } catch (PDOException $e) {
        echo "❌ Error in " . basename($file) . ": " . $e->getMessage() . "\n";
    }
}
