<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Blade View</title>
    </head>
    <body style="text-align: center">
        <h2>Contoh Halaman View Blade</h2>
        <nav>
            <a href="<?php echo url('/home') ?>">HOME</a>
            |
            <a href="<?php echo url('/tentang') ?>">TENTANG</a>
            |
            <a href="<?php echo url('/kontak') ?>">KONTAK</a>
            
        </nav>
        <hr/>
        <br/>
        <br/>
       
        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>
   
        <!-- bagian konten blog -->
        @yield('konten')
   
        <br/>
        <br/>
        <hr/>
        <footer>
            <p>Modul praktikum pemrograman web lanjut 
tahun @include('tahun') </p>
        </footer>
    </body>
</html>
