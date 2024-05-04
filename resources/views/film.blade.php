{{-- @php
    //$film1 = App\Models\Film::all();
    //$film = App\Models\Film::all();
    //$singlefilm = App\Models\Film::find(2);
    //$detailfilm = App\Models\DetailFilm::all();
    //$mediafilm = App\Models\MediaFilm::all();
@endphp --}}

{{-- @foreach ($film1 as $data)
    <h2>Id Film :{{ $data->id }}</h2>
    <h2>Judul Film :{{ $data->judul }}</h2>
    <a href="{{ url('film/' . $data->id) }}">Klik Disini</a>
    <hr>
@endforeach --}}

{{-- @foreach ($film as $data)
    <h2>Id Film :{{ $data->id }}</h2>
    <h2>Judul Film :{{ $data->judul }}</h2>
    <h2>Deskripsi Film :{{ $data->deskripsi }}</h2>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $data->DetailFilm->code_film }}</h4>
    <h4>Code Film : {{ $data->DetailFilm->url_imdb }}</h4>
    <h3>Media Film</h3>
    @foreach ($data->MediaFilm as $apalah)
        <h4>Title Media Film :{{ $apalah->media_title }}</h4>
        <h4>Url Media Film :{{ $apalah->url_media }}</h4>
        <hr>
    @endforeach
@endforeach --}}

{{-- <h2>Id Film :{{ $singlefilm->id }}</h2>
<h2>Judul Film :{{ $singlefilm->judul }}</h2>
<h2>Deskripsi Film :{{ $singlefilm->deskripsi }}</h2>
<h3>Detail Film</h3>
<h4>Code Film : {{ $singlefilm->DetailFilm->code_film }}</h4>
<h4>Url Film : {{ $singlefilm->DetailFilm->url_imdb }}</h4>
<hr> --}}

{{-- @foreach ($detailfilm as $data)
    <h2>Id Detail Film :{{ $data->id }}</h2>
    <h2>Code Film : {{ $data->code_film }}</h2>
    <h2>Code Film : {{ $data->url_imdb }}</h2>
    <h3>Daftar Film</h3>
    <h4>Judul Film :{{ $data->Film->judul }}</h4>
    <h4>Deskripsi Film :{{ $data->Film->deskripsi }}</h4>
    <hr>
@endforeach --}}

{{-- @foreach ($mediafilm as $data) 
    <h2>Id Media Film :{{ $data->id }}</h2>
    <h2>Id Film :{{ $data->film_id }}</h2>
    <h2>Tipe Media Film :{{ $data->media_type }}</h2>
    <h2>Title Media Film :{{ $data->media_title }}</h2>
    <h2>Url Media Film :{{ $data->url_media }}</h2>
    <hr>
@endforeach --}}

@extends('layout.layout')

@section('content')
    @php
        $film = App\Models\Film::all();
    @endphp
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film as $ror)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                                    dy=".3em">{{$ror->judul}}</text>
                            </svg>

                            <div class="card-body">
                                <p class="card-text">{{ $ror->deskripsi }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ url('film/' . $ror->id) }}"
                                            class="btn btn-sm btn-outline-secondary">View</a>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endsection
