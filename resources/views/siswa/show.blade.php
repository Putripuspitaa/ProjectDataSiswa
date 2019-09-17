@extends('template')

@section('main')
    <div id="siswa">
        <h2>Detail Siswa</h2>

        <table class="table table-striped">
            <tr>
            <center>
                <img class="rounded" src="{{asset('images/'.$siswa->avatar) }}" width="300px" height="auto">
            </center>
            </tr>
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama_siswa}}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin}}</td>
            </tr>
        </table>
        <button type="button" class="btn btn-primary" 
    onclick="window.location='http://localhost/nama_project/public/siswa'">Kembali</button>
    </div>
@stop