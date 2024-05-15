<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArtikelRequest;
use App\Http\Requests\UpdateArtikelRequest;
use App\Models\Artikel;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Melihat semua data
    public function getArtikel()
    {
        //Melihat semua data yang ada pada model "Movie"
        $artikels = Artikel::all();
        //dump data atau melihat isi dari sebuah variable
        //dd($movies);
        //passing data movie ke view "movie.index"
        return view('artikel.artikel', compact('artikels'));
    }
    public function getArtikelByid($id)
    {
        //menampilkan data movie berdasarkan id yang dipilih
        $artikels = Artikel::findOrFail($id);
        return view('artikel.show', compact('artikels'));
    }
    public function getArtikelByKategori($kategori)
    {
        //menampilkan data movie berdasarkan id yang dipilih
        $artikels = Artikel::where('kategori', $kategori)->get();
        return view('artikel.kategori', compact('artikels'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtikelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtikelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtikelRequest  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtikelRequest $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        //
    }
}
