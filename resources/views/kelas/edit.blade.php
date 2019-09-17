@extends('template')

@section('main')
<div id="kelas">
    <h2>Edit Kelas</h2>
    <form action="{{ url('kelas/' . $kelas->id . '/update') }}" method="post" enctype="multipart/form-data">
    @csrf 

    <div class="form-group">
        <label for="id" class="control-label">ID</label>
        <input name="id" type="text" class="form-control" 
        value="{{$kelas->id}}">
    </div>

    <div class="form-group">
        <label for="nama_kelas" class="control-label">Nama Kelas</label>
        <input name="nama_kelas" type="text" class="form-control" 
        value="{{$kelas->nama_kelas}}">
    </div>

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="button" class="btn btn-primary" 
    onclick="window.location='http://localhost/nama_project/public/guru'">Kembali</button>
    </form>
</div>
@stop