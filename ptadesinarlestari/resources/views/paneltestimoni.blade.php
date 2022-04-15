@extends('adminlte::page')

@section('title', 'Panel')

@section('content_header')
    <h1>Testimoni</h1>
@stop

@section('content')
    <p>Tuliskan Testimoni dari feedback dari customers</p>
    <form action="add" method="POST">
        @csrf
        <div class="form-group row">
            <label for="editor" class="col-sm-2 col-form-label">Editor Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="editor">
            </div>
        </div>
		<div>
			<textarea class="form-control" rows="10" name="isi_testimoni" required></textarea>
		</div><br><br>
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop