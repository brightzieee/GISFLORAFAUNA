<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelArea extends Model
{
    public function insertData($data)
    {
        $this->db->table('tb_area')->insert($data);
    }

    public function AllData()
    {
        return $this->db->table('tb_area')
                    ->Get()->getResultArray();
    }
}