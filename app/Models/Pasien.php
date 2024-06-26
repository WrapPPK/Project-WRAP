<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use App\Models\WaktuMinum;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Pasien extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'pasiens';
    protected $fillable = [
        'nama_obat','id','name', 'email', 'password', 'age', 'gender', 'disease','level', 'status', 'time_to_take_medicine', 'medication_times','mulai_minum', 'akhir_minum', 'photo'
    ];

    use HasFactory;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function waktuMinum()
    {
        return $this->hasMany(WaktuMinum::class, 'id');
    }
}
