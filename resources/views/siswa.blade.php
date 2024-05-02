@php
    //$siswa = \App\Models\Siswa::orderby('id', 'desc')->get();
    //$sekolah = \App\Models\Sekolah::where('id', '!=', 5)->orderBy('id', 'desc')->groupBy('id')->get();
    $siswa2 = \App\Models\Siswa::find(12);
    $siswa3 = \App\Models\Siswa::where('id', 3)->orderby('id', 'desc')->first();
@endphp

{{-- @foreach ($siswa as $data) 
    <h1>ID : {{ $data->id }}</h1>
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Kelas : {{ $data->kelas }}</h1>
    <h1>jenis_kelamin : {{ $data->jenis_kelamin }}</h1>
    <hr>
@endforeach --}}

{{-- @foreach ($sekolah as $data)
    <h1>ID : {{ $data->id }}</h1>
    <h1>Nama : {{ $data->nama }}</h1>
    <h1>Alamat : {{ $data->alamat }}</h1>
    <h1>Email : {{ $data->email }}</h1>
    <h1>Tlp : {{ $data->tlp }}</h1>
    <h1>Status : {{ $data->status }}</h1>
    <hr>
@endforeach --}}

<h2>tanpa foreach</h2>
<h1>ID : {{ $siswa2->id ?? 'kosong' }}</h1>
<h1>Nama : {{ $siswa2->nama ?? 'kosong' }}</h1>
<h1>Kelas : {{ $siswa2->kelas ?? 'kosong' }}</h1>
<h1>jenis_kelamin : {{ $siswa2->jenis_kelamin ?? 'kosong' }}</h1>
<hr>

<h2>first</h2>
<h1>ID : {{ $siswa3->id ?? 'kosong' }}</h1>
<h1>Nama : {{ $siswa3->nama ?? 'kosong' }}</h1>
<h1>Kelas : {{ $siswa3->kelas ?? 'kosong' }}</h1>
<h1>jenis_kelamin : {{ $siswa3->jenis_kelamin ?? 'kosong' }}</h1>
<hr>
