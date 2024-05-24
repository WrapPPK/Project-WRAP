<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class adminModel extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'admintable';
    protected $fillable = ['id','nip','nama','email','password'];

    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
