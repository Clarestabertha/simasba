<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    // Jika tabel yang digunakan tidak sesuai dengan nama default
    protected $table = 'kerusakan';

    // Jika tabel tidak menggunakan timestamp
    public $timestamps = false;
    protected $primaryKey = 'id_kerusakan';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama_pelapor',
        'tanggal',
        'sumber_laporan',
        'lokasi',
        'deskripsi',
        'personel',
        'tgl_perbaikan', // Mengganti tanda hubung dengan garis bawah
        'foto_kerusakan',
        'status',
    ];
}
