<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminLTE.dashboard');
    }
    public function adduser()
    {
        return view('adminLTE.adduser');
    }
    public function viewuser()
    {
        return view('adminLTE.viewuser');
    }
    public function edituser()
    {
        return view('adminLTE.edituser');
    }
}