<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class News extends Eloquent
{
    protected $collection = 'news';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'title',
                        'image',
                        'summary',
                        'news_date',
                        'isactive'
                    ];
}
