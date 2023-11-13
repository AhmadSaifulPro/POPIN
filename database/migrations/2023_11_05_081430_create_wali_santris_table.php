<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('wali_santri', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_wali');
            $table->string('alamat_wali');
            $table->string('no_telp');
            $table->string('email');
            $table->string('password');
            $table->string('jenis_kelamin');
            $table->string('hubungan');
            $table->string('pekerjaan');
            $table->date('tgl_lahir');
            $table->string('kota_lahir');
            $table->enum('penghasilan_wali', ['kurang dari 500.000','500.000 - 1.000.000','1.000.000 - 2.000.000', '2.000.000 - 3.000.000', '3.000.000 - 5.000.000', 'lebih dari 5.000.000','tidak ada']);
            $table->string('pendidikan_terakhir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wali_santri');
    }
};
