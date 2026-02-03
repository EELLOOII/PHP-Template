<?php

namespace App\Repositories;

use App\Core\Database;

class UserRepository
{
    public function all()
    {
        return Database::query("SELECT * FROM users");
    }
}
