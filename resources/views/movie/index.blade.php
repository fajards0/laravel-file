@extends('layout.layout')
@section('content')
    <div class="container">
        <h3 align="center" class="py-4" style="font-family: cursive">Daftar Film Toy Story
            <hr>
        </h3>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col">
                    <center>
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $movie->cover_url }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">
                                    <a href="movie/{{ $movie->id }}">{{ $movie->title }}</a>
                                </p>
                            </div>
                        </div>
                    </center>
                </div>
            @endforeach
        </div>
    </div>
@endsection
