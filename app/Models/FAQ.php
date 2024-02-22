<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class FAQ extends Eloquent
{
    protected $collection = 'faq';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        '_id',
                        'question',
                        'answer',
                        'faq_isactive'
                    ];
}
