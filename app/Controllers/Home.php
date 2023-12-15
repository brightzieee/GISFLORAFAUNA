<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title_content' => 'Welcome Nature Friends!'
        ];
        return view('v_dashboard', $data);
    }

    public function contact(): string
    {
        $data = [
            'title_content' => 'Hubungi Kami!'
        ];
        return view('v_contact', $data);
    }
}
