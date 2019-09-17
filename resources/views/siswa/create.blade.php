@extends('template')

@section('main')
    <div id="siswa">
        <h2>Tambah Siswa</h2>

        <form action="{{ url('siswa/store') }}" method="post">
        {{csrf_field()}}
        <div class="form-group">
        <label for="nisn" class="control-label">NISN</label>
        <input name="nisn" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="nama_siswa" class="control-label">Nama</label>
            <input name="nama_siswa" type="text" class="form-control">
        </div>

        <div class="form-group">
            <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
            <input name="tanggal_lahir" type="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>

        <div class="form-check">
            <input class="form-check-input" type="radio"
            name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
            <label class="form-check-label"
            for="jenis_kelamin">Perempuan</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio"
            name="jenis_kelamin" id="jenis_kelamin" value="L">
            <label class="form-check-label"
            for="jenis_kelamin">Laki-Laki</label>
        </div>

        <div class="form-group">
            <label for="id_kelas">Kelas</label>
            <select class="form-control" name="id_kelas">
            <option value="1">XI RPL 5</option>
            <option value="2">XI RPL 3</option>
            </select>
        </div>

        <div class="form-group">
            <label for="avatar" class="control-label">Avatar</label>
            <input type="file" name="avatar" class="form-control">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<button type="button" class="btn btn-primary" 
    onclick="window.location='http://localhost/nama_project/public/siswa'">Kembali</button>
        </form>
    </div>
@stop