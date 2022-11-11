<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    protected $fillable = [
        'nip', 'nama', 'jabatan_id', 'divisi_id', 'gender',
        'tmp_lahir', 'tgl_lahir', 'alamat', 'foto'
    ];
    public function pelatihan()
    {
        return $this->hasMany(Pelatihan::class);
    }
    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }
    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
