<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUser extends Model
{
    protected $table            = 'tb_organism';
    protected $primaryKey       = 'or_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'us_id',
        'us_name',
        'us_username',
        'us_email',
        'us_jk',
        'us_number_phone',
        'us_address',
        'us_password',
        'created_at'
    ];
}
