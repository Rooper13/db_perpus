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
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $data_buku->nama_pegawai }}" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">telfon</label>
            <input type="text" class="form-control" name="telfon" id="telfon" value="{{ $data_buku->telfon_pegawai }}" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $data_buku->alamat_pegawai }}" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">posisi</label>
            <input type="text" class="form-control" name="posisi" id="posisi" value="{{ $data_buku->posisi_peagawai }}" placeholder="Nama Buku">
        </div>
        @endforeach
        
        <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
    </form>

    @if ($errors->any())
        <br>
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
      
      