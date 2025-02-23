<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengemudi extends Model
{
    use HasFactory;

    protected $table = 'pengemudis'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'nama',
        'status',
        'jumlah_kelas_lulus'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pengemudi) {
            if ($pengemudi->status == 1) {
                $pengemudi->jumlah_kelas_lulus = 3;
            }
        });
    }
}
