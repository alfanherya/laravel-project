@extends('adminlte::page')

@section('title', 'Add')

@section('content_header')
    <h1>Tambah Daftar Guru</h1>
@stop

@section('content')
    <form action="/admin/guru/insert" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label>NIP</label>
                        <input name="nip_guru" class="form-control">
                        <div class="text-danger">
                            @error('nip_guru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Guru</label>
                        <input name="nama_guru" class="form-control">
                        <div class="text-danger">
                            @error('nama_guru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran</label>
                        <input name="mapel" class="form-control">
                        <div class="text-danger">
                            @error('mapel')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Foto Guru</label>
                        <input type="file" name="foto_guru" class="form-control">
                        <div class="text-danger">
                            @error('foto_guru')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
@stop
