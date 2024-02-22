<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Agent extends Eloquent
{
    protected $collection = 'agents';
    protected $primaryKey = '_id';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $connection="mongodb";
    protected $fillable = [
                        '_id',
                        'name',
                        'agent_isactive'
                    ];
}
