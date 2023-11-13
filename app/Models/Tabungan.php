<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    use HasFactory;
    protected $table ="tabungan";
    protected $fillable = ['tanggal','siswa_id','jenis','jumlah','admin_id'];

    function Santri(){
        return $this->belongsTo(Santri::class, 'siswa_id');
    }

    function Admin(){
        return $this->belongsTo(Admin::class, 'admin_id');
    }
}
