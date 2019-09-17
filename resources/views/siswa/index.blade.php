@extends('template')

@section('main')
<div id="siswa">

    <h3>Data Siswa</h3>

    @if (!empty($siswa_list)) 
        <table class="table">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin </th>
                <th>Kelas</th>
                <th>Action </th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa_list as $siswa)
            <tr>
                <td>{{ $siswa->nisn }}</a></td>
                <td>{{ $siswa->nama_siswa }}</a></td>
                <td>{{ $siswa->tanggal_lahir }}</td>
                <td>{{ $siswa->jenis_kelamin }}</td>
                <td>{{ ! empty($siswa->kelas->nama_kelas) ?
                        $siswa->kelas->nama_kelas : '-' }} </td>
            <td><a class="btn btn-success btn-sm" 
            href="{{ url('siswa/' . $siswa->id) }}">Detail</a></td>
            <td><a class="btn btn-warning btn-sm" 
            href="{{ url('siswa/' . $siswa->id .'/edit') }}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}">Delete</a></td>
</tr>
            @endforeach
        
@else
    <p>Tidak ada data siswa.</p>
@endif
</div>
        </tbody>
     </table> 
<a href="{{ url('siswa/create') }}" class="btn btn-primary">Tambah Siswa</a>
<a href="{{ url('siswa/siswa_pdf') }}" class="btn btn-primary" target="_blank">CETAK PDF</a>
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
