<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Cetak PDF </title>
</head>
<body>
   <style type="text/css">
   table tr td,
   table tr th{
     font size : 9pt; 
   }

   </style>
   <div>
   <center>
   <h5>Membuat Laporan PDF Dengan DOMPDF Laravel</h5>
   <h6><a target="_blank"> XI RPL 5</a></h6>
   </center>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><h3>NISN</h3></th>
      <th scope="col"><h3>Nama</h3></th>
      <th scope="col"><h3>Tgl Lahir</h3></th>
      <th scope="col"><h3>JK</h3></th>
      <th scope="col"><h3>Kelas</h3></th>

    </tr>
  </thead>
  <tbody>
      @php $i=1 @endphp
      @foreach($siswa as $siswa)
      <tr>
        <td>{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nama_siswa }}</a></td>
        <td>{{ $siswa->tanggal_lahir }}</td>
        <td>{{ $siswa->jenis_kelamin }}</td>
        <td>{{ $siswa->kelas->nama_kelas }}</td>
      </tr>
      @endforeach
      </tbody>
      </div>
    </table>
    </body>
</html>
     