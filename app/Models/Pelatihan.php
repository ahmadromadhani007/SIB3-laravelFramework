<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelatihan extends Model
{
    use HasFactory;

    protected $table = 'pelatihan';

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }

    public function materi()
    {
        return $this->belongsTo(Materi::class);
    }
}
