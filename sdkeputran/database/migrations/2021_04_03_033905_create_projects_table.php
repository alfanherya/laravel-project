<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infosiswa', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_daftar')->nullable();
            $table->string('namaLengkap', 255)->nullable();
            $table->string('jenisKelamin', 20)->nullable();
            $table->string('nisn', 50)->nullable();
            $table->string('nikk', 50)->nullable();
            $table->string('tempatLahir', 40)->nullable();
            // $table->date('tanggalLahir', 20)->nullable();
            // $table->string('agama', 20)->nullable();
            // $table->string('kewarganegaraan', 30)->nullable();
            // $table->string('kebutuhanKhusus', 50)->nullable();
            // $table->string('alamatJalan', 100)->nullable();
            // $table->string('rt', 20)->nullable();
            // $table->string('rw', 20)->nullable();
            // $table->string('namaDusun', 200)->nullable();
            // $table->string('namaKelurahan', 200)->nullable();
            // $table->string('kecamatan', 200)->nullable();
            // $table->string('kodepos', 20)->nullable();
            // $table->string('tempatTinggal', 40)->nullable();
            // $table->string('transportasi', 50)->nullable();
            // $table->string('noKks', 50)->nullable();
            // $table->string('anakKeberapa', 20)->nullable();
            // $table->string('penerimaKpsPkh', 10)->nullable();
            // $table->string('noKpsPkh', 100)->nullable();
            // $table->string('usulandrSekolah', 20)->nullable();
            // $table->string('penerimaKip', 20)->nullable();
            // $table->string('nomorKip', 20)->nullable();
            // $table->string('namadiKip', 100)->nullable();
            // $table->string('fisikKip', 20)->nullable();
            // $table->string('namaAyah', 200)->nullable();
            // $table->string('nikAyah', 50)->nullable();
            // $table->string('thnLahirAyah', 20)->nullable();
            // $table->string('pendidikanAyah', 100)->nullable();
            // $table->string('pekerjaanAyah', 100)->nullable();
            // $table->string('penghasilanAyah', 100)->nullable();
            // $table->string('berkebutuhanKhusus', 200)->nullable();
            // $table->string('namaIbu', 200)->nullable();
            // $table->string('nikIbu', 50)->nullable();
            // $table->string('thnLahirIbu', 20)->nullable();
            // $table->string('pendidikanIbu', 50)->nullable();
            // $table->string('pekerjaanIbu', 50)->nullable();
            // $table->string('penghasilanIbu', 100)->nullable();
            // $table->string('berkebutuhanKhususIbu', 50)->nullable();
            // $table->string('noTelpRumah', 30)->nullable();
            // $table->string('nomorHp', 30)->nullable();
            // $table->string('email', 200)->nullable();
            // $table->timestamp('created_at')->useCurrent();
            // $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infosiswa');
    }
}
