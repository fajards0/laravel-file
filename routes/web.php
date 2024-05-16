<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;
use App\Models\AlbumMusik;
use App\Models\Film;
use App\Models\Sekolah;
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

Route::get('/sample/{nama}', function (Request $request, $nama) {
    $nama2 = $nama;
    return view('sample', compact('nama2'));
});

Route::get('siswa', function () {
    //return Siswa::all();
    return view('siswa');
});

Route::get('sekolah', function () {
    return Sekolah::all();
});

Route::get('album', function () {
    //return view('albummusik');
    return AlbumMusik::all();
});

Route::get('film', function () {
    return view('film');
});

Route::get('film/{id}', function (int $id) {
    return view('detail-film', ['film' => Film::find($id)]);
});

// Route with controller

Route::get('perkenalan', [MyController::class, 'introduce']);

Route::get('animal', [Mycontroller::class, 'animals']);

Route::get('movie', [Moviecontroller::class, 'getMovie']);

Route::get('movie/{id}', [Moviecontroller::class, 'getMovieById']);

Route::get('artikel', [Artikelcontroller::class, 'getArtikel']);

Route::get('artikel/id/{id}', [Artikelcontroller::class, 'getArtikelById']);

Route::get('artikel/kategori/{kategori}', [Artikelcontroller::class, 'getArtikelByKategori']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('penulis', PenulisController::class);

Route::resource('genre', GenreController::class);

Route::resource('buku', BukuController::class);
