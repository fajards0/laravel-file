@extends('layout.layout')
@section('content')
    <div align="center" class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $artikels->foto }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{ $artikels->judul }}</p>
                        <p>Penulis : <b>{{ $artikels->penulis }}</b>View</p>
                        <p>Kategori : {{ $artikels->kategori }}</p>
                        <p>Konten : {{ $artikels->konten }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
