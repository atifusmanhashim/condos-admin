<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserRole extends Eloquent
{
    protected $collection = 'role';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'role_id',
                        'name'
                    ];
}
