<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('halaman', 'editbuku')
@section('judul_halaman', 'Halaman Edit Data Buku')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
    
    <div class="d-flex justify-content-between">
        <h2>Edit Data Buku</h2>
        <a class="btn btn-dark" href="<?php echo url('/buku') ?>">Kembali</a>
    </div>
    <p>List buku yang tersedia di perpustakaan</p>
	@foreach($buku as $data_buku)
	<form action="/buku/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $data_buku->id }}"> <br/>
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data_buku->nama_buku }}" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori" id="kategori">
                <option value="Anak - anak" <?php if( $data_buku->kategori_buku == 'Anak - anak'){ echo "selected"; } ?>>Anak - anak</option>
                <option value="Ilmu Pengetahuan Alam" <?php if( $data_buku->kategori_buku == 'Ilmu Pengetahuan Alam'){ echo "selected"; } ?>>Ilmu Pengetahuan Alam</option>
                <option value="Politik" <?php if( $data_buku->kategori_buku == 'Politik'){ echo "selected"; } ?>>Politik</option>
                <option value="Religi" <?php if( $data_buku->kategori_buku == 'Religi'){ echo "selected"; } ?>>Religi</option>
                <option value="Novel" <?php if( $data_buku->kategori_buku == 'Novel'){ echo "selected"; } ?>>Novel</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="penerbit">Penerbit</label>
            <select class="form-control" name="penerbit" id="penerbit">
                <option value="Bukunesia" <?php if( $data_buku->penerbit_buku == 'Bukunesia'){ echo "selected"; } ?>>Bukunesia</option>
                <option value="Graha Ilmu" <?php if( $data_buku->penerbit_buku == 'Graha Ilmu'){ echo "selected"; } ?>>Graha Ilmu</option>
                <option value="Al Hayat" <?php if( $data_buku->penerbit_buku == 'Al Hayat'){ echo "selected"; } ?>>Al Hayat</option>
                <option value="Deep Publish" <?php if( $data_buku->penerbit_buku == 'Deep Publish'){ echo "selected"; } ?>>Deep Publish</option>
                <option value="Falcon Publishing" <?php if( $data_buku->penerbit_buku == 'Falcon Publishing'){ echo "selected"; } ?>>Falcon Publishing</option>
                <option value="Kata Depan" <?php if( $data_buku->penerbit_buku == 'Kata Depan'){ echo "selected"; } ?>>Kata Depan</option>
            </select>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="tahun">Tahun Buku</label>
                <input type="number" name="tahun" class="form-control" value="{{ $data_buku->tahun_buku }}">
            </div>
            <div class="col">
                <label for="jumlah">Jumlah Stok Buku</label>
                <input type="number" name="jumlah" class="form-control" value="{{ $data_buku->jumlah_buku }}">
            </div>
        </div>
        @if (count($errors) > 0)
        <div class="alert alert-danger mt-3">
            @foreach ($errors->all() as $error)
                - {{ $error }} <br>
            @endforeach
        </div>
        @endif
        <div class="form-group mt-3">
		    <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach
 
@endsection