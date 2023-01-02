<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function service()
    {
        return view('service');
    }
    public function notifications()
    {
        return view('admin/notifications');
    }
    public function account()
    {
        return view('admin/account');
    }
    public function settings()
    {
        return view('admin/settings');
    }

    public function sign_up()
    {
        return view('admin/sign_up');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function tables()
    {
        $data = [
            'bg1' => null,
            'bg2' => 'active bg-gradient-primary',
            'namePages' => 'Tables',
        ];
        return view('admin/tables', $data);
    }
    public function login()
    {
        return view('formLogin/authLogin');
    }
    public function register()
    {
        return view('formLogin/authRegister');
    }
    public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
    public function input()
    {
        return view('admin/input');
    }
}
