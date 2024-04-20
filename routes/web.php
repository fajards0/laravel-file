<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'selamat datang di webapp saya<br>'
        . 'laravel, emang keren.';

});

Route::get('/animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "tiger", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/about', function () {
    $nama = "Fajar Dwi Saputro";
    $jenis_kelamin = "Laki-laki";
    $pendidikan_terakhir = "SMK";
    $pekerjaan = "Pengusaha";
    return view('biodata', compact('nama', 'jenis_kelamin', 'pendidikan_terakhir', 'pekerjaan'));
});
