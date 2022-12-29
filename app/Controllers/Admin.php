<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function service()
    {
        return view('service');
    }
    public function notifications()
    {
        return view('admin/notifications');
    }
    public function profile()
    {
        return view('admin/profile');
    }
    public function sign_in()
    {
        return view('admin/sign_in');
    }
    public function sign_up()
    {
        return view('admin/sign_up');
    }
    public function tables()
    {
        return view('admin/tables');
    }
    public function login()
    {
        return view('formLogin/login');
    }
}
