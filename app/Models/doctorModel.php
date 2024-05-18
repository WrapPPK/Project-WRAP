<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class doctorModel extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'doctortable';
    protected $fillable = ['id','nip','name','email','password','uploadFoto'];

    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
