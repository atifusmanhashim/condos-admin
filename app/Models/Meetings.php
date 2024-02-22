<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Meetings extends Eloquent
{
    protected $collection = 'meetings';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'schemaversion',
                        'name',
                        'phone',
                        'email',
                        'type',
                        'datetime',
                        'message',
                        'createdate'
                    ];
}
