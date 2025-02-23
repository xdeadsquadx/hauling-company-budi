<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'id_kendaraan',
        'tanggal',
    ];
}
