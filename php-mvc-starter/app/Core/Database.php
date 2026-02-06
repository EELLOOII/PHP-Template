<?php

namespace App\Core;

use PDO;

class Database
{
    protected static PDO $pdo;

    public static function connect()
    {
        if (!isset(self::$pdo)) {
            $config = require __DIR__ . '/../../config/database.php';

            self::$pdo = new PDO(
                "mysql:host={$config['host']};dbname={$config['name']}",
                $config['user'],
                $config['pass']
            );
        }

        return self::$pdo;
    }

    public static function query($sql)
    {
        return self::connect()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
