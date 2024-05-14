@extends('layout.layout')
@section('content')
    <div align="center" class="container">
        <div class="row justify-content-center">
            @foreach ($artikels as $coo)
                <div class="col-md-8">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $coo->foto }}" class="card-img-top" alt="">
                        <div class="card-body">
                            <p class="card-text">{{ $coo->judul }}</p>
                            <p>Penulis : <b>{{ $coo->penulis }}</b></p>
                            <p>kategori : {{ $coo->kategori }}</p>
                            <p>Konten : {{ $coo->konten }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
