<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class NewsletterEmails extends Eloquent
{
    protected $collection = 'newsletter_emails';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $fillable = [
                        'schemaversion',
                        'email',
                        'createdate'
                    ];
}
