<?php

namespace App\Controllers;

use App\Services\UserService;

class UserController
{
    public function index()
    {
        $service = new UserService();
        $users = $service->getAll();

        view('users/index', compact('users'));
    }
}
