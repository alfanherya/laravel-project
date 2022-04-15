@extends('adminlte::page')

@section('title', 'Panel')

@section('content_header')
    <h1>Visi dan misi</h1>
@stop

@section('content')
    <p>Visi Misi Perusahaan</p>
    <form>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            
        </div>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop