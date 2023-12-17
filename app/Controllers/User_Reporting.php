<?php

namespace App\Controllers;

use App\Models\ModelReport;
class User_Reporting extends BaseController
{
    private $ModelReport;

    public function __construct()
    {
        $this->ModelReport = new ModelReport();
    }
    
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
            'data_user' => $this->ModelReport->findAll()
        ];
        return view('Report/v_data_user', $data);
    }
}
