@php
    //$film = App\Models\Film::all();
    //$singlefilm = App\Models\Film::find(2);
    $detailfilm = App\Models\DetailFilm::all();
@endphp

{{-- @foreach ($film as $data)
    <h2>Id Film :{{ $data->id }}</h2>
    <h2>Judul Film :{{ $data->judul }}</h2>
    <h2>Deskripsi Film :{{ $data->deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $data->DetailFilm->code_film }}</h4>
    <h4>Code Film : {{ $data->DetailFilm->url_imdb }}</h4>
    <hr>
@endforeach --}}

{{-- <h2>Id Film :{{ $singlefilm->id }}</h2>
<h2>Judul Film :{{ $singlefilm->judul }}</h2>
<h2>Deskripsi Film :{{ $singlefilm->deskripsi }}</h2>
<h3>Detail Film</h3>
<h4>Code Film : {{ $singlefilm->DetailFilm->code_film }}</h4>
<h4>Code Film : {{ $singlefilm->DetailFilm->url_imdb }}</h4>
<hr> --}}

@foreach ($detailfilm as $data)
    <h2>Id Detail Film :{{ $data->id }}</h2>
    <h4>Code Film : {{ $data->code_film }}</h4>
    <h4>Code Film : {{ $data->url_imdb }}</h4>
    <h3>Daftar Film</h3>
    <h2>Judul Film :{{ $data->Film->judul }}</h2>
    <h2>Deskripsi Film :{{ $data->Film->deskripsi }}</h2>
    <hr>
@endforeach
