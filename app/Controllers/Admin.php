<?php

namespace App\Controllers;

class Admin extends BaseController
{
    // public function dashboard()
    // {
    //     $data = [
    //         'bg1' => 'active bg-gradient-primary',
    //         'bg2' => null,
    //         'namePages' => 'Dashboard',
    //     ];
    //     return view('admin/dashboard', $data);
    // }
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
    // public function login()
    // {
    //     return view('admin/sign_in');
    // }
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
    }public function forgot_password()
    {
        return view('formLogin/authforgotpassword');
    }
}
