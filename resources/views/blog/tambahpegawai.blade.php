<form action="/buku/tambah2" method="post">
        {{ csrf_field() }}
        <div class="form-group mt-3">
            <label for="nama">Nama</label>
           	<input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">telfon</label>
           	<input type="text" class="form-control" name="telfon" id="telfon" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">alamat</label>
           	<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Nama Buku">
        </div>
        <div class="form-group mt-3">
            <label for="nama">posisi</label>
           	<input type="text" class="form-control" name="posisi" id="posisi" placeholder="Nama Buku">
        </div>
       
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

