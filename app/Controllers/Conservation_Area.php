<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelArea;

class Conservation_Area extends BaseController
{
    //public function __construct()
    //{
    //    $this->ModelArea = new ModelArea();
    //}
    
    public function index(): string
    {
        $data = [
            'title_content' => 'Conservation Area Data Input',
        ];
        return view('Area/v_conservation_area', $data);
    }

    public function insertData()
    {
        if ($this->validate([
            //Jika Lolos Validasi
            'kk_abb_area' => [
                'label' => 'Abbreviation Area Name',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_name_area' => [
                'label' => 'Name of Area Conservation',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_species' => [
                'label' => 'Number of Species',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_res_area' => [
                'label' => 'Area Residents',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_address' => [
                'label' => 'Address',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!' 
                ]
            ],  'kk_province' => [
                'label' => 'Province',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_city' => [
                'label' => 'City',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_district' => [
                'label' => 'District',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'kk_code' => [
                'label' => 'Code',
                'rules' => 'required|is_unique[tb_area.kk_code]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'is_unique' => '{field} Memiliki Karakteristik Sendiri!'
                ]
            ],  'kk_description' => [
                'label' => 'Description',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],
        ])) {
        } else {

            $data = [
                'or_name_org' => $this->request->getPost('or_name_org'),
                'or_name_latin' => $this->request->getPost('or_name_latin'),
                'or_type' => $this->request->getPost('or_type'),
                'or_amount' => $this->request->getPost('or_amount'),
                'or_class' => $this->request->getPost('or_class'),
                'or_description' => $this->request->getPost('or_description'),
                'or_insitu' => $this->request->getPost('or_insitu'),
                'or_eksitu' => $this->request->getPost('or_eksitu')
            ];

            //$this->Modelarea->insertData($data);
            //session()->setFlashdata('insert', 'Data Berhasil Ditambahkan!');

            //Jika Tidak Lolos Validasi
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            //return redirect()->to(base_url('Conservation_Area'))->withInput('validation', \Config\Services::validation());
        }   
    }

    public function dataArea(): string
    {
        $data = [
            'title_content' => 'Data Conservation Area',
            //'datar' => $this->ModelArea->AllData;
        ];
        return view('Area/v_data_area', $data);
    }
}
