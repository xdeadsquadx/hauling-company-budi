<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kelas_pelatihan extends Model
{
    use HasFactory;

    protected $table = 'maintenances'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'id_kendaraan',
        'jumlah',
        'id_sparepart',
        'keterangan',
        'estimasi'
    ];
