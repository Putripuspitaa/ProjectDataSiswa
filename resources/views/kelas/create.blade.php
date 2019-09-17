@extends('template')

@section('main')
    <div id="kelas">
        <h2>Tambah Kelas</h2>

        <form action="{{ url('kelas/store') }}" method="post">
        {{csrf_field()}}

        <div class="form-group">
        <label for="id" class="control-label">ID</label>
        <input name="id" type="text" class="form-control">
        </div>


        <div class="form-group">
            <label for="nama_kelas" class="control-label">Nama Kelas</label>
            <input name="nama_kelas" type="text" class="form-control">
        </div>

</div>
<button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@stop