<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelReport extends Model
{
    protected $table            = 'tb_report';
    protected $primaryKey       = 'rp_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'rp_id',
        'rp_user_id',
        'rp_name',
        'rp_email',
        'rp_number_phone',
        'rp_type_org',
        'rp_name_org',
        'rp_address',
        'rp_province',
        'rp_city',
        'rp_district',
        'rp_date',
        'rp_image',
        'created_at',
        'updated_at'];
}