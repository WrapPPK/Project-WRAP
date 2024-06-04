<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Doctor extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'doctors';
    protected $fillable = ['id','nip','name','email','password','photo'];

    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
