<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $table = 'kelas_pengemudis'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'id_kelas',
        'id_pengemudi',
    ];
}
}
