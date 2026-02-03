<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    protected UserRepository $repo;

    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    public function getAll()
    {
        return $this->repo->all();
    }
}
