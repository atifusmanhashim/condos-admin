<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Projects extends Eloquent
{
    protected $collection = 'projects';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        '_id',
                        'project_url',
                        'project_id',
                        'project_stub',
                        'project_image',
                        'information',
                        'description',
                        'project_information',
                        'project_attributes',
                        'units',
                        'unit_mix',
                        'ground_floor_area',
                        'parking',
                        'access_and_services',
                        'minimum_setbacks',
                        'applications',
                        'permits',
                        'forums',
                        'is_featured'
                    ];
}
