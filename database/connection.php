<?php
// database/connection.php

$host = 'localhost';
$db   = 'namer';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo; // ✅ Return the PDO object
} catch (PDOException $e) {
    die("DB Connection Failed: " . $e->getMessage());
}
