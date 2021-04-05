@extends('layouts.template')
@section('content')
    {{-- Banner Area --}}
    <section class="site-banner">
        <div class="container">

            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Opps!</strong> Ada sedikit masalah dari form yang di masukkan.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                    @endforeach
                </ul>
            </div>

            @endif

            <form action="{{route('infosiswa.store')}}" method="POST">
                @csrf

                <h1 class="title-text1">FORMULIR PESERTA DIDIK</h1>
            <form>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Daftar</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputTanggal" placeholder="Tanggal Daftar">
                    </div>
                  </div>
            </form>

            <h2 class="title-text2">Data Pribadi</h2>

            <form>
                <div class="form-group row">
                    <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="namaLengkap" placeholder="Nama">
                      <p class="title-text3">Nama peserta didik sesuai dengan dokumen resmi yang berlaku(Akta atau Ijazah saat ini)</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="lk">
                        <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenisKelamin" id="inlineRadio1" value="pr">
                        <label class="form-check-label" for="inlineRadio1">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nisn" placeholder="Nomor Nisn">
                      <p class="title-text3">Nomor induk siswa nasional(jika memeliki) jika belum memiliki wajib di kosongkan.</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">NIK atau No.Kitas</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNIK" placeholder="Masukan Nomor Induk Keluarga">
                      <p class="title-text3">Nomor induk kependudukan yang tercantum pada kartu keluarga </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir">
                      <p class="title-text3">Tempat lahir peserta didik sesuai dokumen resmi</p>
                    </div>
                  </div>
                  {{-- <div class="form-group row">
                    <label for="inputTanggalLahir" class="col-sm-2 col-form-label">Tanggl Lahir</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir">
                      <p class="title-text3">Tanggal sesuai dengan dokumen surat kelahiran</p>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputAgama" class="col-sm-2 col-form-label">Agama & Kepercayaan</label>
                    <div class="col-sm-10">
                      <input type="text" readonly class="form-control-plaintext" id="inputAgama" placeholder="Isikan Agama atau Kepercayaan yang dianut">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputKewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-4">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Indonesia">
                        <label class="form-check-label" for="inlineRadio1">Indonesia (WNI)</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Asing">
                        <label class="form-check-label" for="inlineRadio1">Asing (WNA)</label>
                      </div>
                    </div>
                    <label for="inputNegara" class="col-sm-2"> Nama Negara </label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputNegara" placeholder="Masukan nama Negara saat ini">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="kebutuhanKhusus" class="col-sm-2 col-form-label">Kebutuhan Khusus</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak Ada</option>
                        <option>Netra (A)</option>
                        <option>Rungu (B)</option>
                        <option>Grahita Ringan (C)</option>
                        <option>Grahita Sedang (C1)</option>
                        <option>Daksa Ringan (D1)</option>
                        <option>Daksa Sedang (D2)</option>
                        <option>Laras (E)</option>
                        <option>Wicara (F)</option>
                        <option>Tuna Ganda (G)</option>
                        <option>Hiper Aktif (H)</option>
                        <option>Cerdas Istimewa (I)</option>
                        <option>Bakat Istimewa (J)</option>
                        <option>Kesulitan Belajar (K)</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Sindrome</option>
                        <option>Autis</option>
                      </select>
                    </div>
                  </div>
                <div class="form-group row">
                  <label for="alamatJalan" class="col-sm-2 col-form-label">Alamat Jalan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAlamat" placeholder="masukan Alamat dengan jelas">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="rt" class="col-sm-2 col-form-label">RT</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputRt" placeholder="No RT">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="rw" class="col-sm-2 col-form-label">RW</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputRt" placeholder="No RT">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="namaDusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputDusun" placeholder="nama dusun">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputKelurahan" placeholder="nama kelurahan/desa">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputKecamatan" placeholder="nama kecamatan">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="kodePos" class="col-sm-2 col-form-label">Kode Pos</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputKodePos" placeholder="kode pos">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="tempatTinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
                  <div class="form-group col-md-4">
                      <select id="inputState" class="form-control">
                      <option selected>Pilihan...</option>
                      <option>Bersama orang tua</option>
                      <option>Wali</option>
                      <option>Kos</option>
                      <option>Asrama</option>
                      <option>Panti Asuhan</option>
                      <option>Lainnya</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="transportasi" class="col-sm-2 col-form-label">Transportasi</label>
                  <div class="form-group col-md-4">
                      <select id="inputState" class="form-control">
                      <option selected>Pilihan...</option>
                      <option>Jalan Kaki</option>
                      <option>Kendaraan Pribadi</option>
                      <option>Kendaraan Umum/Angkutan</option>
                      <option>Jemputan Sekolah</option>
                      <option>Ojek</option>
                      <option>Lainnya</option>
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="nomorKks" class="col-sm-2 col-form-label">Nomor KKS (Kartu Keluarga Sejahtera)</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputKKS" placeholder="nomor kks">
                      <p class="title-text3">Nomor kartu keluarga sejahtera (jika memiliki). Nomor yang dimaksud adalah 6 digit kode
                          yang tertera pada sisi belakang kiri atas kartu(dibawah lambang garuda pancasila)
                      </p>
                      <p class="title-text3">Peserta didik yang dinyatakan sebagai anggota KKS apabila tercantum di dalam kartu keluarga dengan kepala keluarga pemegang
                          KKS. sebagai contoh, peserta didik tercantum pada KK dengan kepala keluarganya adalah kakek. Apabila kakek peserta didik tesebut adalah pemegang KKS.
                          maka nomor KKS milik kakek peserta didik yang bersangkutan dapat diisikan pada kolom ini
                    </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="anakKe" class="col-sm-2 col-form-label">Anak keberapa</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputAnakKe" placeholder="anak keberapa">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penerimaKPS/PKH" class="col-sm-2 col-form-label">Penerima KPS/PKH</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tidak">
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <p class="title-text3">Status peserta didik sebagai penerima manfaat KPS(Kartu Perlindungan Sosial) PKH (Program Keluarga Harapan)
                            peserta didik dinyatakan sebagai penerima KPS/PKH apabila tercantum di dalam kartu keluarga dengan kepala keluarga pemegang KPS/PKH.
                            sebagai contoh, peserta didik tercantum pada KK dengan kepala keluarganya adalah kakek. Apabila kakek peserta didik tersebut pemegang KPS/PKH,
                            maka peserta didik yang bersangkutan dinyatakan penerima KPS/PKH.
                        </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="noKps" class="col-sm-2 col-form-label">No KPS/PKH</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="inputnoKPS" placeholder="no kps/pkh">
                    </div>
                    <div class="col-sm-5">
                        <p class="title-text3">*) Apabila menerima</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="usulanLayak" class="col-sm-2 col-form-label">Usulan Dari Sekolah (layak PIP)</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tidak">
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <p class="title-text3">Pilih ya apabila peserta didik layak diajukan sebagai penerima manfaat program indonesia pinter
                            (Seperti BSM dan sejenisnya). Pilih tidak jika tidak memenuhi kriteria. Opsi ini khusus bagi peserta didik yang tidak memiliki KIP. peserta didik yang memiliki KIP silahkan dipilih Tidak
                        </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penerimaKIP" class="col-sm-2 col-form-label">Penerima KIP (Kartu Indonesia Pintar)</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tidak">
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <p class="title-text3">Pilih Ya apabila peserta didik memiliki kartu Indonesia Pintar(KIP). Pilih Tidak jika tidak memiliki</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nomorKIP" class="col-sm-2 col-form-label">Nomor KIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="noKIP" placeholder="noKIP">
                      <p class="title-text3">Nomor KIP milik peserta didik apabila sebelumnya telah dipilih sebagai penerima KIP. Nomor yang dimaksud
                        adalah 6 digit kode yang tertera pada sisi belakang kanan atas kartu (dibawah lambang toga)
                    </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namaTertera" class="col-sm-2 col-form-label">Nama tertera di KIP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="namaTertera" placeholder="isikan nama tertera di KIP">
                      <p class="title-text3">Nama yang tertera pada KIP milik peserta didik</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="terimaFisik" class="col-sm-2 col-form-label">Terima fisik Kartu(KIP)</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="ya">
                            <label class="form-check-label" for="inlineRadio1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="tidak">
                            <label class="form-check-label" for="inlineRadio1">Tidak</label>
                        </div>
                        <p class="title-text3">Status bahwa peserta didik sudah menerima atau belum menerima Kartu indonesia pintar secara fisik</p>
                    </div>
                  </div> --}}
            </form>
            {{-- <h2 class="title-text2">DATA AYAH KANDUNG</h2>
            <Form>
                <div class="form-group row">
                    <label for="namaAyah" class="col-sm-2 col-form-label">Nama Ayah Kandung</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNamaAyah" placeholder="masukan nama ayah disini">
                      <p class="title-text3">Nama ayah kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau Sosial
                          (seperti Alm, Dr, Drs, S.Pd dan H).
                      </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nikAyah" class="col-sm-2 col-form-label">NIK Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNikAyah" placeholder="masukan nomor nik ayah">
                      <p class="title-text3">nomor induk kependudukan yang tercantum pada kartu keluarga atau KTP ayah kandung peserta didik</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="thnLahirAyah" class="col-sm-2 col-form-label">Tahun Lahir Ayah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputThnLahirAyah" placeholder="thn lahir">
                      <p class="title-text3">Tahun lahir ayah kandung peserta didik</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pendidikanAyah" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak sekolah</option>
                        <option>Putus SD</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pekerjaanAyah" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak Bekerja</option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Karyawan Swasta</option>
                        <option>Pedagang Kecil</option>
                        <option>Pedagang Besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Lain-lain</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penghasilanBulanan" class="col-sm-2 col-form-label">Penghasilan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>kurang dari 500.000</option>
                        <option>500.000 - 999.9999</option>
                        <option>1.000.000 - 1.999.999</option>
                        <option>2.000.000 - 4.999.999</option>
                        <option>5.000.000 - 20.000.000</option>
                        <option>lebih dari 20 juta</option>
                        <option>Lain-lain</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kebutuhanKhususAyah" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak Ada</option>
                        <option>Netra (A)</option>
                        <option>Rungu (B)</option>
                        <option>Grahita Ringan (C)</option>
                        <option>Grahita Sedang (C1)</option>
                        <option>Daksa Ringan (D1)</option>
                        <option>Daksa Sedang (D2)</option>
                        <option>Laras (E)</option>
                        <option>Wicara (F)</option>
                        <option>Tuna Ganda (G)</option>
                        <option>Hiper Aktif (H)</option>
                        <option>Cerdas Istimewa (I)</option>
                        <option>Bakat Istimewa (J)</option>
                        <option>Kesulitan Belajar (K)</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Sindrome</option>
                        <option>Autis</option>
                      </select>
                    </div>
                  </div>
                </Form>
            <h2 class="title-text2">DATA IBU KANDUNG</h2>
            <Form>
                <div class="form-group row">
                    <label for="namaIbu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNamaAyah" placeholder="masukan nama ibu disini">
                      <p class="title-text3">Nama Ibu kandung peserta didik sesuai dokumen resmi yang berlaku. Hindari penggunaan gelar akademik atau Sosial
                          (seperti Alm, Dr, Drs, S.Pd dan H).
                      </p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nikIbu" class="col-sm-2 col-form-label">NIK Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNikIbu" placeholder="masukan nomor nik ibu">
                      <p class="title-text3">nomor induk kependudukan yang tercantum pada kartu keluarga atau KTP ibu kandung peserta didik</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="thnLahirIbu" class="col-sm-2 col-form-label">Tahun Lahir Ibu</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputThnLahirIbu" placeholder="thn lahir">
                      <p class="title-text3">Tahun lahir Ibu kandung peserta didik</p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pendidikanIbu" class="col-sm-2 col-form-label">Pendidikan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak sekolah</option>
                        <option>Putus SD</option>
                        <option>SD Sederajat</option>
                        <option>SMP Sederajat</option>
                        <option>SMA Sederajat</option>
                        <option>D1</option>
                        <option>D2</option>
                        <option>D3</option>
                        <option>S1</option>
                        <option>S2</option>
                        <option>S3</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="pekerjaanIbu" class="col-sm-2 col-form-label">Pekerjaan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak Bekerja</option>
                        <option>Nelayan</option>
                        <option>Petani</option>
                        <option>Peternak</option>
                        <option>PNS/TNI/POLRI</option>
                        <option>Karyawan Swasta</option>
                        <option>Pedagang Kecil</option>
                        <option>Pedagang Besar</option>
                        <option>Wiraswasta</option>
                        <option>Wirausaha</option>
                        <option>Buruh</option>
                        <option>Pensiunan</option>
                        <option>Ibu Rumah Tangga</option>
                        <option>Lain-lain</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="penghasilanBulanan" class="col-sm-2 col-form-label">Penghasilan</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>kurang dari 500.000</option>
                        <option>500.000 - 999.9999</option>
                        <option>1.000.000 - 1.999.999</option>
                        <option>2.000.000 - 4.999.999</option>
                        <option>5.000.000 - 20.000.000</option>
                        <option>lebih dari 20 juta</option>
                        <option>Tidak Ada</option>
                        <option>Lain-lain</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kebutuhanKhususIbu" class="col-sm-2 col-form-label">Berkebutuhan Khusus</label>
                    <div class="form-group col-md-4">
                        <select id="inputState" class="form-control">
                        <option selected>Pilihan...</option>
                        <option>Tidak Ada</option>
                        <option>Netra (A)</option>
                        <option>Rungu (B)</option>
                        <option>Grahita Ringan (C)</option>
                        <option>Grahita Sedang (C1)</option>
                        <option>Daksa Ringan (D1)</option>
                        <option>Daksa Sedang (D2)</option>
                        <option>Laras (E)</option>
                        <option>Wicara (F)</option>
                        <option>Tuna Ganda (G)</option>
                        <option>Hiper Aktif (H)</option>
                        <option>Cerdas Istimewa (I)</option>
                        <option>Bakat Istimewa (J)</option>
                        <option>Kesulitan Belajar (K)</option>
                        <option>Narkoba</option>
                        <option>Indigo</option>
                        <option>Down Sindrome</option>
                        <option>Autis</option>
                      </select>
                    </div>
                  </div>
            </Form>
            <h2 class="title-text2">KONTAK</h2>
            <form>
                <div class="form-group row">
                    <label for="noTelp" class="col-sm-2 col-form-label">Nomor Telepon Rumah</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNoTelpRumah" placeholder="nomor telepon rumah yang aktif">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="noHp" class="col-sm-2 col-form-label">Nomor HP</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputNoHP" placeholder="nomor hp yang aktif">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="email yang aktif">
                    </div>
                  </div>
            </form> --}}
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-auto">
                        <button type="submit" class="btn btn-primary">Daftar</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </section>
@endsection

