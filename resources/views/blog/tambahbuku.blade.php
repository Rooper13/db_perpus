<form action="/buku/tambah" method="post">
        {{ csrf_field() }}
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
           	<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="kategori">Kategori</label>
            <select class="form-control" name="kategori" id="kategori">
                <option value="Anak - anak">Anak - anak</option>
          <option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
                <option value="Politik">Politik</option>
                <option value="Religi">Religi</option>
                <option value="Novel">Novel</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="penerbit">Penerbit</label>
            <select class="form-control" name="penerbit" id="penerbit">
                <option value="Bukunesia">Bukunesia</option>
                <option value="Graha Ilmu">Graha Ilmu</option>
                <option value="Al Hayat">Al Hayat</option>
                <option value="Deep Publish">Deep Publish</option>
          	<option value="Falcon Publishing">Falcon Publishing</option>
                <option value="Kata Depan">Kata Depan</option>
            </select>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="tahun">Tahun Buku</label>
                <input type="number" name="tahun" class="form-control">
            </div>
            <div class="col">
                <label for="jumlah">Jumlah Stok Buku</label>
                <input type="number" name="jumlah" class="form-control">
            </div>
        <div class="form-group mt-3">
            <input class="btn btn-primary" type="submit" value="Simpan Data">
        </div>
        </div>
        @if (count($errors) > 0)
<div class="alert alert-danger mt-3">
     @foreach ($errors->all() as $error)
           - {{ $error }} <br>
     @endforeach
</div>
@endif

@if(session('error'))
<div class="alert alert-danger mt-3">
     {{session('error')}}!
</div>
@endif
    </form>