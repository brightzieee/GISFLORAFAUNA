<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table            = 'tb_admin';
    protected $primaryKey       = 'ad_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'ad_id',
        'ad_name',
        'ad_username',
        'ad_email',
        'ad_number_phone',
        'ad_password',
        'created_at'

    ];
}
