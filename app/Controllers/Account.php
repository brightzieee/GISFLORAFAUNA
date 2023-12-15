<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function index(): string
    {
        $data = [
            'title_content' => 'Admin Account'
        ];
        return view('Account/v_profile', $data);
    }
}
