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
        'hari1',
        'tanggal_minum1',
        'sudah_minum1',
        'waktu_minum1',
        'bukti_minum1',

        'sudah_minum2',
        'waktu_minum2',
        'bukti_minum2',

        'sudah_minum3',
        'waktu_minum3',
        'bukti_minum3',

        'hari2',
        'tanggal_minum2',
        'sudah_minum4',
        'waktu_minum4',
        'bukti_minum4',

        'sudah_minum5',
        'waktu_minum5',
        'bukti_minum5',

        'sudah_minum6',
        'waktu_minum6',
        'bukti_minum6',

        'hari3',
        'tanggal_minum3',
        'sudah_minum7',
        'waktu_minum7',
        'bukti_minum7',

        'sudah_minum8',
        'waktu_minum8',
        'bukti_minum8',

        'sudah_minum9',
        'waktu_minum9',
        'bukti_minum9',


        'hari4',
        'tanggal_minum4',
        'sudah_minum10',
        'waktu_minum10',
        'bukti_minum10',

        'sudah_minum11',
        'waktu_minum11',
        'bukti_minum11',

        'sudah_minum12',
        'waktu_minum12',
        'bukti_minum12',


        'hari5',
        'tanggal_minum5',
        'sudah_minum13',
        'waktu_minum13',
        'bukti_minum13',

        'sudah_minum14',
        'waktu_minum14',
        'bukti_minum14',

        'sudah_minum15',
        'waktu_minum15',
        'bukti_minum15',

        'hari6',
        'tanggal_minum6',
        'sudah_minum16',
        'waktu_minum16',
        'bukti_minum16',

        'sudah_minum17',
        'waktu_minum17',
        'bukti_minum17',

        'sudah_minum18',
        'waktu_minum18',
        'bukti_minum18',

        'hari7',
        'tanggal_minum7',
        'sudah_minum19',
        'waktu_minum19',
        'bukti_minum19',

        'sudah_minum20',
        'waktu_minum20',
        'bukti_minum20',

        'sudah_minum21',
        'waktu_minum21',
        'bukti_minum21',
    ];

    // Relasi dengan model User (jika diperlukan)
    public function userPasien()
    {
        return $this->belongsTo(Pasien::class, 'id');
    }
}
