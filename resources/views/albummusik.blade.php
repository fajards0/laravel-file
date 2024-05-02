@php
    $album = App\Models\AlbumMusik::take(30)->where('tahun', 2021)->orderBy('id', 'desc')->get();
    $album2 = App\Models\AlbumMusik::find(40);
    $album3 = App\Models\AlbumMusik::first();
@endphp

<h1 style="color: blue">Menggunakan Get</h1>
@foreach ($album as $data)
    <h1>ID : {{ $data->id }}</h1>
    <h1>Judul : {{ $data->judul }}</h1>
    <h1>Tahun : {{ $data->tahun }}</h1>
    <h1>Cover Album : {{ $data->cover_album }}</h1>
    <hr>
@endforeach
<hr>

<h1 style="color: green">Menggunakan Find</h1>
<h1>ID : {{ $album2->id ?? '-' }}</h1>
<h1>Judul : {{ $album2->judul ?? '-' }}</h1>
<h1>Tahun : {{ $album2->tahun ?? '-' }}</h1>
<h1>Cover Album : {{ $album2->cover_album ?? '-' }}</h1>
<hr>
<hr>

<h1 style="color: rgb(255, 0, 144)">Menggunakan First</h1>
<h1>ID : {{ $album3->id ?? '-' }}</h1>
<h1>Judul : {{ $album3->judul ?? '-' }}</h1>
<h1>Tahun : {{ $album3->tahun ?? '-' }}</h1>
<h1>Cover Album : {{ $album3->cover_album ?? '-' }}</h1>
<hr>
<hr>
