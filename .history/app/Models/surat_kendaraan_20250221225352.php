<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class surat_kendaraan extends Model
{
    use HasFactory;

    protected $table = 'surat_kendaraan';
    protected $primaryKey = 'id_surat';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id_surat',
        'id_kendaraan',
        s
        'tanggal_terbit',
        'tanggal_expired',
    ];

    public function kendaraan()
    {
        return $this->hasMany(Kendaraan::class, 'id_surat', 'id_surat');
    }
    $table->char('id_surat', 5)->primary();
    $table->char('id_kendaraan', 5);
    $table->string('status', 20);
    $table->text('keterangan');
    $table->date('tanggal_terbit');
    $table->date('tanggal_expired');
}
