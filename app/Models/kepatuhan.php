<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepatuhan extends Model
{
    use HasFactory;

    protected $table = 'kepatuhan';

    protected $fillable = [
        'pasien_id',
        'tanggal',
        'waktu_minum',
        'status',
        'keterlambatan',
        'alasan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'waktu_minum' => 'datetime',
        'status' => 'boolean',
        'keterlambatan' => 'integer',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'pasien_id');
    }

    public function waktuMinum()
    {
        return $this->hasMany(WaktuMinum::class, 'id');
    }
}