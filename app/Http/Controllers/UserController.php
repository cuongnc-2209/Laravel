<?php

namespace App\Http\Controllers;

use App\User;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function viewuser()
    {
        $users = User::all();
        return view('viewuser', compact('users'));
    }
}