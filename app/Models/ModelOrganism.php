<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrganism extends Model
{
    public function insertData($data)
    {
        $this->db->table('tb_organism')->insert($data);
    }

    public function AllData()
    {
        return $this->db->table('tb_organism')
                    ->Get()->getResultArray();
    }
}