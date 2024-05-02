<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loginModel extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password', 'birthdate', 'phone_number', 'gender', 'doctor',
    ];
}
