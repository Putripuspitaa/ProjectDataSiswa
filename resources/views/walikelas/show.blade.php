@extends('template')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
 integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"  textColor="white">

@section('main')
<div id="walikelas">
      <h2>Detail Wali Kelas</h2>

      <table class="table table-striped">
        <tr>
        <center>
            <img class="rounded" src="{{asset('images/'.$walikelas->avatar) }}" width="300px" height="auto">
        </center>
        </tr>
        <tr>
            <th>Nama Kelas</th>
            <td>{{ !empty($walikelas->kelas->nama_kelas) ?
                        $walikelas->kelas->nama_kelas : '-' }}</td>
        </tr>

        <tr>
            <th>Nama Guru</th>
            <td>{{ !empty($walikelas->guru->nama_guru) ?
                        $walikelas->guru->nama_guru : '-' }}</td>
        </tr>
       
    </table>
</div>
@stop