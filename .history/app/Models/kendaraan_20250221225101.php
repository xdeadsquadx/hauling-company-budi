<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';
    protected $primaryKey = 'id_kendaraan';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_kendaraan',
        'plat_kendaraan',
        'merek',
        'jenis',
        'id_pasangan',
        'id_surat',
        'status_maintenance',
    ];

    public function surat()
    {
        return $this->belongsTo(SuratKendaraan::class, 'id_surat', 'id_surat');
    }
}
