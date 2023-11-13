<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsenJamaah extends Model
{
    use HasFactory;
    protected $table = "absen_jamaah";
    protected $fillable = ['siswa_id','admin_id','verifikasi','waktu'];
}
