<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelArea extends Model
{
    protected $table            = 'tb_area';
    protected $primaryKey       = 'kk_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'kk_id',
        'kk_org_id',
        'kk_abb_area',
        'kk_name_area',
        'kk_species',
        'kk_res_area',
        'kk_address',
        'kk_province',
        'kk_city',
        'kk_district',
        'kk_code',
        'kk_latitude',
        'kk_longitude',
        'kk_image',
        'kk_description',
        'created_at',
        'updated_at'];
}