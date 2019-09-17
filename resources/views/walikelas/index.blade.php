@extends('template')

@section('main')
<div id="walikelas">

     @if (!empty($walikelas_list))
     <table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Nama Guru</th>
        <th>Nama Kelas</th>
        <th>Admin</th>
    </tr>

        <tbody>
            @foreach($walikelas_list as $walikelas)
                <tr>
                <td>{{$walikelas->id}}</td>
                <!--<td><a href="{{url('walikelas/' . $walikelas->id . '/profile')}}">{{$walikelas->nama_walikelas}}</a></td>-->
                <td>{{ ! empty($walikelas->guru->nama_guru)?
                        $walikelas->guru->nama_guru : '-'}}</td>
                <td>{{ ! empty($walikelas->kelas->nama_kelas)?
                        $walikelas->kelas->nama_kelas : '-'}}</td>
                        <td><a class="btn btn-success btn-sm" 
            href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a></td>
            <td><a class="btn btn-warning btn-sm" 
            href="{{ url('walikelas/' . $walikelas->id .'/edit') }}">Edit</a></td>
            <td><a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/delete') }}">Delete</a></td>

                </tr>
            @endforeach 
        
    @else
        <p>Tidak ada data wali kelas.</p>
    @endif

</div>
  </tbody>
</table>
    <a href="{{url('walikelas/create')}}" class="btn btn-primary">Tambah Wali Kelas</a>
<br>
<br>
<br>
<br>
<br>
@stop
@section('footer')
    <div id="footer">
        <p>&copy; 2019 Belajar_Laravel</p>
    </div>
@stop