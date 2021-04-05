@extends('adminlte::page')

@section('title', 'Detail Guru')

@section('content_header')
    <h1>Detail Guru</h1>
@stop

@section('content')
<table class="table">
    <tr>
        <th width="150px">NIP</th>
        <th width="10px">:</th>
        <th>{{ $guru->nip_guru}}</th>
    </tr>
    <tr>
        <th width="150px">Nama Guru</th>
        <th width="10px">:</th>
        <th>{{ $guru->nama_guru}}</th>
    </tr>
    <tr>
        <th width="150px">Mata Pelajaran</th>
        <th width="10px">:</th>
        <th>{{ $guru->mapel}}</th>
    </tr>
    <tr>
        <th width="150px">Foto</th>
        <th width="10px">:</th>
        <th><img src="{{ url('foto_guru/'.$guru->foto_guru)}}" width="400px"></th>
    </tr>
    <tr>
        <th>
            <a href="/admin/guru" class="btn btn-success btn-sm">kembali</a>
        </th>
    </tr>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
