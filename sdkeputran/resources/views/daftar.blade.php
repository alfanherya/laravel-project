@extends('layouts.template')
@section('content')

<section class="site-banner">
    <div class="container">
        <h1 class="center">Form Pendaftaran</h1>
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Lengkap</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan nama lengkap">
              <small id="emailHelp" class="form-text text-muted">Tuliskan nama lengkap dengan benar</small>
            </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat">
                <small id="emailHelp" class="form-text text-muted">Alamat tempat tinggal saat ini</small>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">No.HP</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan No HP">
                <small id="emailHelp" class="form-text text-muted">No hp yang sering digunakan</small>
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="gridCheck">
                  <label class="form-check-label" for="gridCheck">
                    <p> setuju dan data yang di masukan benar-benar data asli.<p>
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign in</button>
          </form>

    </div>
</section>

@endsection






















{{-- @extends('layout.template')
@section('content')

<section class="site-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 site-title">
                <h3 class="title-text">PRIMARY SCHOOL</h3>
                <h1 class="title-text text-uppercase">Keputran 06</h1>
                <h4 class="title-text text-uppercase">Best school from city of batik </h4>
                <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button primary-button mr-4 text-uppercase">Daftar</button>
                                <button type="button" class="btn button secondary-button text-uppercase">Lihat Profile</button>
                            </div>
            </div>
            </div>

            <div class="col-lg-6 col-md-12 banner-image">
                <img src="./images/web4.png" alt="banner-img" class="img-fluid">
            </div>
        </div>
    </div>
</section>

@endsection --}}





