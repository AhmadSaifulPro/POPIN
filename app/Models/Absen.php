<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;
    protected $table = "absen";
    protected $fillable = ['siswa_id','admin_id','verifikasi','ket','tanggal','jam_keluar','jam_masuk'];

    function Siswa()
    {
        return $this->belongsTo(Santri::class, 'siswa_id');
    }

    function Admin()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

}
