@extends('template')

@section('main')
<div id="kelas">
    <h2>Data Kelas</h2>

    @if (!empty($kelas_list)) 
        <table class="table">
        <thead>
            <tr>
            <th>Id</th>
                <th>Kelas</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelas_list as $kelas)
            <tr>
                <td>{{ $kelas->id }}</td>
                <td>{{ $kelas->nama_kelas }}</td>
    
            <td><a class="btn btn-success btn-sm" 
            href="{{ url('kelas/' . $kelas->id) }}">Detail</a></td>
            <td><a class="btn btn-warning btn-sm" 
            href="{{ url('kelas/' . $kelas->id .'/edit') }}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('kelas/' . $kelas->id . '/delete') }}">Delete</a></td>
</tr>
            @endforeach
        
@else
    <p>Tidak ada data siswa.</p>
@endif
</div>
        </tbody>
     </table> 
<a href="{{ url('kelas/create') }}" class="btn btn-primary">Tambah Kelas</a>
<br>
<br>
<br>
<br>
<br>
<br>

@stop

@section('footer')
    <div id="footer">
        <p>&copy;2019 nama_project</p>
    </div>
    @stop