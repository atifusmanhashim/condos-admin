<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class AppUser extends Eloquent
{
    protected $collection = 'users';
    protected $primaryKey = '_id';
    protected $connection="mongodb";
    protected $hidden = [
        'password',
        'remember_token',
        'salt','hash'
    ];
 

    protected $fillable = [
                        '_id',
                        'passwordreset',
                        'schemaversion',
                        'username',
                        'usernumber',
                        'email',
                        'password',
                        'salt',
                        'hash',
                        'mobile',
                        'lastlogin',
                    ];

}
