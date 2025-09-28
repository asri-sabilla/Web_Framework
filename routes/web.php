<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('welcome');
});

Route::get('/home', function () {
    echo "<h1>Welcome to Home Page team Gree</h1>";
    echo "<p>GUNCANG PERTANIAN, REBUT EKONOMI EKSKLUSIF</p>";
});

Route::prefix('/homepage')->group(function () {

Route::get('/about', function () {
    echo "<h1>About Gree</h1>";
    echo "<p>Gree adalah Platform koperasi digital pertanian berbasis web app, 
        sebagai ekosistem digital yang menghubungkan petani, koperasi, 
        distributor, dan konsumen pasar dalam satu sistem. 
        Melalui digitalisasi, koperasi tradisional yang kurang optimal dapat dihidupkan 
        kembali secara lebih modern, membuka akses yang lebih luas serta membuat 
        rantai pasok pertanian yang transparan dan berbasis digital.</p>";
});

Route::get('/program', function () {
    echo "<h1>Program Gree</h1>";
    echo "<ol>
            <li>Marketplace Hasil Pertanian – Petani menjual hasil panen langsung melalui koperasi digital dengan harga transparan.</li>
            <li>Harga Pasar Real-Time – Integrasi data harga pangan nasional.</li>
            <li>Dashboard Konsumen – Menampilkan riwayat transaksi, reward poin, dan data akun.</li>
            <li>Flash Sale – Produk dari panen gagal yang dijual lebih murah, mengurangi kerugian petani sekaligus menguntungkan konsumen.</li>
          </ol>";
});

Route::get('/team', function () {
    echo "<h1>Our Team</h1>";
    echo "<ul>
            <li><strong>Asri Sabilla Putri</strong> as Hacker</li>
            <li><strong>Jihan Aqilah</strong> as Hustler</li>
            <li><strong>Dalila Tazkia</strong> as Hipster</li>
          </ul>";
});
});

Route::get('/kontak/{name}', function ($name) {
    echo "<h1>Contact Us $name</h1>";
    echo "<p>Email: greebersama@gree.com</p>";
    echo "<p>Phone: +6285925285385</p>";
});

Route::redirect('/homepage/aboutus', '/homepage/about');

Route::fallback(function () {
    return"Maaf, Server error";
});
