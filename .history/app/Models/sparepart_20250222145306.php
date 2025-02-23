<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sparepart extends Model
{
    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    
    class Sparepart extends Model
    {
        use HasFactory;
    
        protected $table = 'spareparts'; // Nama tabel di database (opsional jika sudah sesuai konvensi)
    
        protected $fillable = [
            'nama_sparepart',
            'jumlah',
            'batas_minimal'
        ];
    }
    
}
