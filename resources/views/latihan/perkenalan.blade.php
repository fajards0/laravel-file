@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    Perkenalan
                </div>
                <div class="card-body">
                    <p>Nama : {{ $data['nama'] }}</p>
                    <p>Agama : {{ $data['agama'] }}</p>
                    <p>Alamat : {{ $data['alamat'] }}</p>
                    <p>Jenis Kelamin : {{ $data['jk'] }}</p>
                    <p>hobi</p>
                    <ol>
                        @foreach ($data['hobi'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
