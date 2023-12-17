<?php

namespace App\Controllers;

use App\Models\ModelOrganism;

class Flora extends BaseController
{
    private $ModelOrganism;

    public function __construct()
    {
        $this->ModelOrganism = new ModelOrganism();
    }
    
    public function index(): string
    {
        $data = [
            'title_content' => 'Flora Data Input',
            'data_flora' => $this->ModelOrganism->findAll()
        ];
        return view('Flora/v_flora', $data);
    }

    public function insertData()
    {
        if ($this->validate([
            //Jika Lolos Validasi
            'or_name_org' => [
                'label' => 'Name of Flora',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'or_name_latin' => [
                'label' => 'Latin Name of Flora',
                'rules' => 'required|is_unique[tb_organism.or_name_latin]',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!',
                    'is_unique' => '{field} Memiliki Karakteristik Sendiri!'
                ]
            ],  'or_type' => [
                'label' => 'Types of Flora',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!' 
                ]
            ],  'or_amount' => [
                'label' => 'Number of Flora',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'or_class' => [
                'label' => 'Class of Flora',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'or_description' => [
                'label' => 'Description of Flora',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Tidak Boleh Kosong!'
                ]
            ],  'or_insitu' => [
                'label' => 'Area INSITU',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Dipilih!'
                ]
            ],  'or_eksitu' => [
                'label' => 'Area EKSITU',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Dipilih!'
                ]
            ],  
        ])) {

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

            $this->ModelOrganism->insertData($data);
            session()->setFlashdata('insert', 'Data Berhasil Ditambahkan!');

        } else {
            //Jika Tidak Lolos Validasi
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            //return redirect()->to(base_url('Flora'))->withInput('validation', \Config\Services::validation());
        }   
    }
}
