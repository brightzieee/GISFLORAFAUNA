<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelOrganism extends Model
{
    protected $table            = 'tb_organism';
    protected $primaryKey       = 'or_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = [
        'or_id',
        'or_kk_id',
        'or_name_org',
        'or_name_latin',
        'or_type',
        'or_amount',
        'or_class',
        'or_insitu',
        'or_eksitu',
        'or_image',
        'or_description',
        'created_at',
        'updated_at'
    ];
}
