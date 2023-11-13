<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class WaliSantri extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table ='wali_santri';
    protected $filllbale = ['nik','nama_wali','alamat_wali','no_telp','email','password','jenis_kelamin','hubungan','pekerjaan','tgl_lahir','kota_lahir','penghasilan_wali','pendidikan_terakhir'];
}
