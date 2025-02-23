<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengemudi extends Model
{
    use HasFactory;

    protected $table = 'pengemudis'; // Nama tabel di database (opsional jika sudah sesuai konvensi)

    protected $fillable = [
        'nama'
    ];
}
