<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $fillable = ['no_rekam_medis', 'nama_pasien', 'nama_petugas', 'tanggal_kembali'];

    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class);
    }
}