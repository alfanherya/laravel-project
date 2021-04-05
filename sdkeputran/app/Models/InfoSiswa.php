<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class InfoSiswa extends Model
{
    use HasFactory;

    protected $table = 'infosiswas';
    public $timestamps = true;

    protected $casts = [
        'email' => 'float'
    ];

    protected $fillable = [
        'namaLengkap',
        'jenisKelamin',
        'nisn',
        'nikk',
        'tempatLahir',
        'tanggalLahir',
        'agama',
        'kewarganegaraan',
        'kebutuhanKhusus',
        'alamatJalan',
        'rt',
        'rw',
        'namaDusun',
        'namaKelurahan',
        'kecamatan',
        'kodepos',
        'tempatTinggal',
        'transportasi',
        'noKks',
        'anakKeberapa',
        'penerimaKpsPkh',
        'noKpsPkh',
        'usulandrSekolah',
        'penerimaKip',
        'nomorKip',
        'namadiKip',
        'fisikKip',
        'namaAyah',
        'nikAyah',
        'thnLahirAyah',
        'pendidikanAyah',
        'pekerjaanAyah',
        'penghasilanAyah',
        'berkebutuhanKhusus',
        'namaIbu',
        'nikIbu',
        'thnLahirIbu',
        'pendidikanIbu',
        'pekerjaanIbu',
        'penghasilanIbu',
        'berkebutuhanKhususIbu',
        'noTelpRumah',
        'nomorHp',
        'email',
    ];

    public function addData($data)
    {
        DB::table('infosiswa')->insert($data);
    }

}
