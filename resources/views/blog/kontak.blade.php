<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
    <p>Ini Adalah Halaman Kontak</p>
   
    <table border="1" style="margin-left: auto; margin-right: auto">
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>achmadazzz16@gmail.com</td>
        </tr>
        <tr>
            <td>Hp</td>
            <td>:</td>
            <td>0857-8567-6777</td>
        </tr>
    </table>
 
@endsection
