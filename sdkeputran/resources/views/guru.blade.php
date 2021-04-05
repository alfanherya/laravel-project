@extends('adminlte::page')

@section('title', 'Guru')

@section('content_header')
    <h1>Guru</h1>
@stop

@section('content')
<div class="container-fluid">
    <p>Halaman Guru</p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama Guru</th>
                <th>Mapel</th>
                <th>Foto Guru</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($guru as $data)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{ $data->nip_guru}}</td>
                    <td>{{ $data->nama_guru}}</td>
                    <td>{{ $data->mapel}}</td>
                    <td><img src="{{ url('foto_guru/'.$data->foto_guru)}}" width="150px" height="150px"></td>
                    <td>
                        <a href="/admin/guru/detail/{{$data ->id_guru}}" class="btn btn-sm btn-success">detail</a>
                        <a href="" class="btn btn-sm btn-warning">edit</a>
                        <a href="" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
