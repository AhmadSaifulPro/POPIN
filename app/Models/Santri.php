<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $table ="santri";
    protected $fillable = ['nik','nama','jenis_kelamin','tempat_lahir','alamat','id_walisantri', 'nama_bapak','nama_ibu','tahun_masuk','mukim'];

    public function wali_santri(){
        return $this->belongsTo(WaliSantri::class, 'id_walisantri');
    }
}
