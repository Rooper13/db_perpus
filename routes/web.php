<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route:: get ('blog', function (){
        return view ('about');
});

//Route:: resource('buku',Buku2Controller::class);


Route::get('/buku4/{nomer}', function($nomer){
    return 'STIKI Perpus' . $nomer;
});


Route::get('/buku5/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});


Route::prefix('admin')->get('/buku6/{nomer?}', function($nomer = null){
    return 'STIKI Perpus' . $nomer;
});


Route::get('/anggota', function(){
    return 'Halaman Anggota';
});


Route::get('/anggota/{nomer}', function($nomer){
    return 'Halaman Anggota dengan nrp' . $nomer;
});

Route::get('/home', function () {
    return view('blog/home', ['nama' => 'Azzam']);
});
Route::get('/kontak', function () {
    return view('blog/kontak');
});
Route::get('/tentang', function () {
    return view('blog/tentang');
});

Route::get('/databuku', function () {
    return view('blog/databuku');
});

Route::get('/tambah', function () {
    return view('blog/tambahbuku');
});

Route::get('/buku','App\Http\Controllers\BukuController@index');
Route::get('/buku2','App\Http\Controllers\Buku2Controller@index');

Route::post('/buku/tambah','App\Http\Controllers\Buku2Controller@tambah_buku');

Route::get('/', function () {
    if(Auth::check()){
        return view('blog/home', ['nama' => 'Azzam']);
    }else{
        return view('auth/login');
    }
});


Route::get('/login', function () {
    return view('auth/login');
});





Route::get('/logout', 'App\Http\Controllers\AuthController@logout');


Route::get('/buku/edit/{id}','App\Http\Controllers\Buku2Controller@edit');



Route::post('/buku/update','App\Http\Controllers\Buku2Controller@update');


Route::get('/login', 'App\Http\Controllers\AuthController@index'); 
Route::post('/login', 'App\Http\Controllers\AuthController@store');


Route::get('/buku/delete/{id}','App\Http\Controllers\BukuController@delete');

Route::get('/buku/delete/{id}','App\Http\Controllers\Buku2Controller@delete');


Route::post('/buku/tambah2','App\Http\Controllers\BukuController@tambah_pegawai');

Route::get('/tambah2', function () {
    return view('blog/tambahpegawai');
});

Route::get('/buku/edit2/{id}','App\Http\Controllers\BukuController@edit');

Route::post('/buku/update','App\Http\Controllers\BukuController@update');

route::get('/buku/delete2/{id}','App\Http\Controllers\BukuController@delete');

route::get('/sesi/logout', 'App\Http\Controllers\AuthController@logout');


route::get('/register', 'App\Http\Controllers\AuthController@register');

route::post('/sesi/create', 'App\Http\Controllers\AuthController@create');

Route::get('/profile', function () {
    return view('blog/profile');
});

Route::get('/modal', function () {
    return view('blog/modal1');
});
