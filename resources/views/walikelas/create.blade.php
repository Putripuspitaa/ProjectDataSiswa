@extends('template')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"  textColor="white">
 
@section('main')
    <div id="walikelas">
        <h2>Tambah Wali Kelas</h2>

        <form action="{{url('walikelas')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="id" class="control-label">ID Walikelas</label>
        <input name="id" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="id_kelas" class="control-label">Nama Kelas</label>
        <select name="id_kelas" class="custom-select" class="form-control">
        <option selected></option>
        @foreach($kelas as $k)
        <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
        @endforeach
        </select>
    </div>

   <div class="form-group">
        <label for="id_guru" class="control-label">Nama Guru</label>
        <select name="id_guru" class="custom-select" class="form-control">
        <option selected>Guru...</option>
        @foreach($guru as $g)
        <option value="{{$g->id}}">{{$g->nama_guru}}</option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" name="avatar" class="form-control">
            </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@stop