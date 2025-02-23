<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    use HasFactory;

    protected $table = 'maintenances'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'id_kendaraan',
        'jumlah',
        'id_sparepart',
        'keterangan'
    ];
}

