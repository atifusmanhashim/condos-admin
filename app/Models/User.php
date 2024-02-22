<?php
  
namespace App\Models;
  
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;
class User extends Eloquent implements Authenticatable
{
    use AuthenticatableTrait;
    use Notifiable;
    use HasApiTokens;

    protected $collection = 'admin_users';

    protected $connection="mongodb";

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    
     protected $fillable = [
        'name',
        'email',
        'password',
        'salt',
        'hash',
        'contact_no',
        'role_id',
        'user_active',
        "is_auth"
    ];

  
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array

     */
    protected $hidden = [
        'password',
        'remember_token',
        'salt','hash'
    ];
 
    /**
     * The attributes that should be cast.
     *
     * @var array

     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}