<?php

namespace App\Http\Controllers;

use App\Models\InfoSiswa;
use Illuminate\Http\Request;

class InfoSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $infosiswa = InfoSiswa::latest()->paginate(5);

        return view('infosiswa.index', compact('infosiswa'))
        ->with('i', (request()->input('page', 1)- 1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('infosiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'nisn' => 'required',
            'nikk' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhanKhusus' => 'required',
            'alamatJalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'namaDusun' => 'required',
            'namaKelurahan' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required',
            'tempatTinggal' => 'required',
            'transportasi' => 'required',
            'noKks' => 'required',
            'anakKeberapa' => 'required',
            'penerimaKpsPkh' => 'required',
            'noKpsPkh' => 'required',
            'usulandrSekolah' => 'required',
            'penerimaKip' => 'required',
            'nomorKip' => 'required',
            'namadiKip' => 'required',
            'fisikKip' => 'required',
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'thnLahirAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'penghasilanAyah' => 'required',
            'berkebutuhanKhusus' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'thnLahirIbu' => 'required',
            'pendidikanIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'penghasilanIbu' => 'required',
            'berkebutuhanKhususIbu' => 'required',
            'noTelpRumah' => 'required',
            'nomorHp' => 'required',
            'email' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        InfoSiswa::create($request->all());

        return redirect()->route('infosiswa.index')
        -> with('success','Data siswa berhasil di simpan di DB.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InfoSiswa  $infoSiswa
     * @return \Illuminate\Http\Response
     */
    public function show(InfoSiswa $infoSiswa)
    {
        //
        return view('infosiswa.show', compact('infosiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoSiswa  $infoSiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoSiswa $infoSiswa)
    {
        //
        return view('infosiswa.edit', compact('infosiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoSiswa  $infoSiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoSiswa $infoSiswa)
    {
        //
        $request->validate([
            'namaLengkap' => 'required',
            'jenisKelamin' => 'required',
            'nisn' => 'required',
            'nikk' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'kewarganegaraan' => 'required',
            'kebutuhanKhusus' => 'required',
            'alamatJalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'namaDusun' => 'required',
            'namaKelurahan' => 'required',
            'kecamatan' => 'required',
            'kodepos' => 'required',
            'tempatTinggal' => 'required',
            'transportasi' => 'required',
            'noKks' => 'required',
            'anakKeberapa' => 'required',
            'penerimaKpsPkh' => 'required',
            'noKpsPkh' => 'required',
            'usulandrSekolah' => 'required',
            'penerimaKip' => 'required',
            'nomorKip' => 'required',
            'namadiKip' => 'required',
            'fisikKip' => 'required',
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'thnLahirAyah' => 'required',
            'pendidikanAyah' => 'required',
            'pekerjaanAyah' => 'required',
            'penghasilanAyah' => 'required',
            'berkebutuhanKhusus' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'thnLahirIbu' => 'required',
            'pendidikanIbu' => 'required',
            'pekerjaanIbu' => 'required',
            'penghasilanIbu' => 'required',
            'berkebutuhanKhususIbu' => 'required',
            'noTelpRumah' => 'required',
            'nomorHp' => 'required',
            'email' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $infoSiswa->update($request->all());

        return redirect()->route('infosiswa.index')
        -> with('success', 'InfoSiswa updated berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoSiswa  $infoSiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoSiswa $infoSiswa)
    {
        //
        $infoSiswa->delete();

        return redirect()->route('infosiswa.index')
        ->with('success','Info Siswa berhasil di hapus');
    }
}
