<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pasien;

class WaktuMinum extends Model
{
    use HasFactory;

    protected $table = 'waktu_minum';

    protected $fillable = [
        'id',
        'hari',
        'sudah_minum',
        'tanggal_minum',
        'waktu_minum',
        'bukti_minum',
    ];

    // Relasi dengan model User (jika diperlukan)
    public function userPasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id', 'id');
    }
}
