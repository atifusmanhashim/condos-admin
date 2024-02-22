<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AboutUs extends Eloquent
{
    protected $collection = 'aboutus';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'title',
                        'image',
                        'summary'
                    ];
}
