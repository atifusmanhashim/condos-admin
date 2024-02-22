<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Area extends Eloquent
{
    protected $collection = 'area';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'role_id',
                        'name'
                    ];
}
