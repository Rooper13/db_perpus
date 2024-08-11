<link rel="stylesheet" href="/css/bootsrap.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script  src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script  src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script  src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<link  href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link   href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
<li><a class="active" href="#">Halaman data pegawai</a></li>
  <li><a class="active" href="<?php echo url('/home') ?>">Home</a></li>
  <li><a href="<?php echo url('/buku2') ?>">Data buku</a></li>
  <li><a href="<?php echo url('/buku') ?>">data pegawai</a></li>
  <li><a href="<?php echo url('/tentang') ?>">About</a></li>

</ul>

</body>
<table id="example" class="table">
    <thead>
    <tr>
        <th>nama</th>
        <th>tnrp</th>
        <th>alamt</th>
        <th>posisi</th>
        <th>edit</th>
        <th>delet</th>
        <th>tambah</th>
    </tr>
    </thead>
    <tbody>
    @foreach($buku as $data_buku)
<tr>
    <td>{{ $data_buku->nama_pegawai }}</td>
    <td>{{ $data_buku->telfon_pegawai }}</td>
    <td>{{ $data_buku->alamat_pegawai }}</td>
    <td>{{ $data_buku->posisi_peagawai }}</td>
    <td><a href="/buku/edit2/{{ $data_buku->id }}" class="btn btn-secondary">edit</a></td>
    <td><a href="/buku/delete2/{{ $data_buku->id }}" class="btn btn-success">delet</a></td>
    <td><a href="/tambah2" class="btn btn-primary">tambah pegawai</a></td>
</tr>
@endforeach
</tbody>
</table>

