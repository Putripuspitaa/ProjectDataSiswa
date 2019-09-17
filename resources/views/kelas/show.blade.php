@extends('template')

@section('main')
    <div id="kelas">
        <h2>Detail Kelas</h2>

        <table class="table table-striped"
        >
        <tr>
                <th>ID</th>
                <td>{{ $kelas->id }}</td>
            </tr>
        
            <tr>
                <th>Nama</th>
                <td>{{ $kelas->nama_kelas}}</td>
            </tr>
            
            <br>
            <button type="button" class="btn btn-primary" 
    onclick="window.location='http://localhost/nama_project/public/guru'">Kembali</button>
        </table>
    </div>
@stop