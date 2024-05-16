<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $buku = Buku::orderBy('id', 'desc')->get();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $penulis = Penulis::all();
        $genre = Genre::all();
        return view('buku.create', compact('penulis', 'genre'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus',
            'isbn' => 'required',
            'jml_halaman' => 'required|numeric',
            'cover' => 'required|max:4000|mimes:png,jpg',
            'deskripsi' => 'required',
            'id_penulis' => 'required',
            'tgl_terbit' => 'required',
        ]);

        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->deskripsi = $request->deskripsi;
        $buku->id_penulis = $request->id_penulis;

        //upload foto
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku/', $name);
            $buku->cover = $name;
        }

        $buku->save();
        //tampilkan banyak genre di buku
        $buku->genre()->attach($request->genre);
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $genre = Genre::all();
        $penulis = Penulis::all();
        $selectGenre = $buku->genre->pluck('id')->toArray();
        return view('buku.edit', compact('buku', 'genre', 'penulis', 'selectGenre'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus',
            'isbn' => 'required',
            'jml_halaman' => 'required|numeric',
            // 'cover' => 'required|max:2048kbmimes:png.jpg',
            'deskripsi' => 'required',
            'id_penulis' => 'required',
            'tgl_terbit' => 'required',
        ]);

        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->deskripsi = $request->deskripsi;
        $buku->id_penulis = $request->id_penulis;

        //upload foto
        if ($request->hasFile('cover')) {
            $buku = deleteImage();// untuk menghapus gambar sebelum mengganti gambar baru
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku/', $name);
            $buku->cover = $name;
        }

        $buku->save();
        //tampilkan banyak genre di buku
        $buku->genre()->sync($request->genre);
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->deleteImage();
        $buku->delete();
        $buku->genre()->detach();

        return redirect()->route('buku.index')
            ->with('success', 'data berhasil dihapus');
    }
}
