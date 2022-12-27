<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/dashboard');
    }
    public function notifications()
    {
        return view('pages/notifications');
    }
    public function profile()
    {
        return view('pages/profile');
    }
    public function sign_in()
    {
        return view('pages/sign_in');
    }
    public function sign_un()
    {
        return view('pages/sign_un');
    }
    public function tables()
    {
        return view('pages/tables');
    }
}
