
<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
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
<li><a class="active" href="#home">Halaman data vuku</a></li>
  <li><a class="active" href="<?php echo url('/home') ?>">Home</a></li>
  <li><a href="<?php echo url('/buku2') ?>">Data buku</a></li>
  <li><a href="<?php echo url('/buku') ?>">data pegawai</a></li>
  <li><a href="<?php echo url('/kontak') ?>">About</a></li>
  <li><a href="<?php echo url('/tentang') ?>">kontak</a></li>
</ul>

</body>
<table id="example" class="table">
    <thead>
    <tr>
        <th>nama</th>
        <th>penerbit</th>
        <th>kat</th>
        <th>tahun</th>
        <th>jumlah</th>
        <th>action</th>
        <th>action2</th>
        <th>tambah</th>
    </tr>
    </thead>
    <tbody>
    @foreach($buku as $data_buku)
<tr>
    <td>{{ $data_buku->nama_buku }}</td>
    <td>{{ $data_buku->kategori_buku }}</td>
    <td>{{ $data_buku->penerbit_buku }}</td>
    <td>{{ $data_buku->tahun_buku }}</td>
    <td>{{ $data_buku->jumlah_buku }}</td>
    <td><a href="/buku/edit/{{ $data_buku->id }}" class="btn btn-secondary" class="btn btn-success">edit</a></td>
    <td><a href="/buku/delete/{{ $data_buku->id }}" class="btn btn-success">delet</a></td>
    <td><a href="<?php echo url('/tambah') ?>" class="btn btn-primary">tambah Buku</a></td>
</tr>
@endforeach
</tbody>
</table>

