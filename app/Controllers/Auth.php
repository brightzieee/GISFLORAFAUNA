<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('v_login');
    }

    public function register(): string
    {
        return view('v_register');
    }

    public function forgotPassword(): string
    {
        return view('v_forgot_password');
    }
}
