<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'age', 'gender', 'disease', 'time_to_take_medicine', 'medication_times', 'photo'
    ];

    protected $hidden = [
        'password',
    ];
}
