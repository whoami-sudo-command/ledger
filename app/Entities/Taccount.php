<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Taccount extends Entity
{
    protected $datamap = [
        'type' => 'type-account'
    ];
    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    protected $casts   = [];
}
