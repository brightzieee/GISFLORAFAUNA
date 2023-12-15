<?php

namespace App\Controllers;

class User_Reporting extends BaseController
{
    public function index(): string
    {
        $data = [
            'title_content' => 'User Reporting Inbox'
        ];
        return view('Report/v_user_reporting', $data);
    }

    public function dataUser(): string
    {
        $data = [
            'title_content' => 'Data User Tables',
            //'datus' => $this->ModelOrganism->AllData;
        ];
        return view('Report/v_data_user', $data);
    }
}
