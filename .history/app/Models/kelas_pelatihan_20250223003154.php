<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas_pelatihan extends Model
{
    use HasFactory;

    protected $table = 'kelas_pelatihans'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'kode_kelas',
        'nama_kelas',
        'id_sparepart',
        'keterangan',
        'estimasi'
    ];
}
