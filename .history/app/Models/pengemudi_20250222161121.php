<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengemudi extends Model
{
    use HasFactory;

    protected $table = 'spareparts'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'nama_sparepart',
        'jumlah',
        'batas_minimal'
    ];
}
