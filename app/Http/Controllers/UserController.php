<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser($userId)
    {
        return view('show_user', ['userId' => $userId]);
    }

    public function createUser()
    {
        return view('create_user');
    }
}
