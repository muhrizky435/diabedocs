<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'no_rekam_medis',
        'nama_pasien',
        'nama_petugas',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];
}
