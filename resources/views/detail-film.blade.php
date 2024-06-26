{{-- <h1>Id Film : {{ $film->id }}</h1>
<h1>Judul Film : {{ $film->judul }}</h1>
<p>Deskripsi Film : {{ $film->deskripsi }}</p>
<span>
    <h3>Detail Film</h3>
    <h4>Code Film : {{ $film->DetailFilm->code_film }}</h4>
    <h4>Url Film : <a href="{{ $film->DetailFilm->url_imdb }}"> klik disini</a></h4>
    <hr>
</span>
@foreach ($film->MediaFilm as $apalah)
    <h4>Title Media Film :{{ $apalah->media_title }}</h4>
    @if ($apalah->media_type)
        Url Media Film : <a href="{{ $apalah->url_media }}"> klik disini</a>
    @else
        <img src="{{ $apalah->url_media }}" alt="" height="300">
    @endif
    <hr>
@endforeach --}}

@extends('layout.layout')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{{ $film->judul }}</h1>
                <p class="lead text-muted">{{ $film->deskripsi }}</p>
                <p>
                    <a href="{{ $film->DetailFilm->url_imdb }}" class="btn btn-primary my-2">Masuk Ke IMDB</a>
                    <a href="{{ '/film' }}" class="btn btn-secondary my-2">kembali</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($film->MediaFilm as $apalah)
                    <div class="col">
                        <div class="card shadow-sm">
                            <div class="card-header" style="background-color: rgb(0, 0, 0)">
                                <center>
                                    <h5 style="color: rgb(255, 255, 255)">{{ $apalah->media_title }}</h5>
                                </center>
                            </div>
                            @if ($apalah->media_type)
                                <iframe height="240" src="{{ $apalah->url_media }}"></iframe>
                                {{-- Url Media Film : <a href="{{ $apalah->url_media }}"> klik disini</a> --}}
                            @else
                                <img src="{{ $apalah->url_media }}" alt="" height="240">
                            @endif
                            <hr>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
