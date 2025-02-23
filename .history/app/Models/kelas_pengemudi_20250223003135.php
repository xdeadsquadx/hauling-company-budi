<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas_pengemudi extends Model
{
    use HasFactory;

    protected $table = 'kelas_pengemudis'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'id_kendaraan',
        'jumlah',
        'id_sparepart',
        'keterangan',
        'estimasi'
    ];
}
