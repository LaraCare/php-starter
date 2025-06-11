<?php
namespace App\Core;

use PDO;

class Database
{
    private static $connection = null;

    public static function getConnection()
    {
        if (self::$connection === null) {
            $config = require __DIR__ . '/../../config/database.php';
            self::$connection = new PDO(
                $config['dsn'],
                $config['username'],
                $config['password']
            );
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$connection;
    }
}
