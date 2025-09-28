<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::get('/hai', function () {
return view('hello');
});

Route::get('/helo', function () {
    return('Hello World!');
});

Route::redirect('/contact-us', '/helo');

Route::prefix('/admin')->group(function () {
Route::get('/mahasiswa', function () {
echo "<h1>Daftar Mahasiswa</h1>";
});
Route::get('/dosen', function () {
echo "<h1>Daftar Dosen</h1>";
});
Route::get('/karyawan', function () {
echo "<h1>Daftar Karyawan</h1>";
});
});

//Route::fallback(function () {
//return"Maaf, alamat tidak ditemukan";
//});

//Route::fallback(function () {
//return view ('welcome');
//});

Route::get('/buku/1',function(){
return"Bukuke-1";
});
Route::get('/buku/1',function(){
return"Bukusayake-1";
});
Route::get('/buku/1',function(){
return"Bukukitake-1";
});

Route::get('mahasiswa/asri', function () {
echo "Halaman mahasiswa asri";
});

//LAB minggu 2
//Route::get('/hello1', function () {
//return'

Route::get('hello', function () {
$hello = ['Hello World', 2 => ['Hello
Jakarta','Hello Medan']];
dd($hello);
return $hello;
});