<?php

namespace App\Repositories;

use PDO;

class UserRepository
{
    protected PDO $pdo;

    public function __construct()
    {
        $this->pdo = require __DIR__ . '/../../database/connection.php'; // ✅ Now gets the returned PDO
    }

    public function all(): array
    {
        $stmt = $this->pdo->query("SELECT * FROM users");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
