<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artikel;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artikel::insert([
            'judul' => 'PT LG Elektronik',
            'foto' => 'https://i.pinimg.com/originals/ab/10/f3/ab10f35d7e51bdad6564add826e55c74.jpg',
            'kategori' => 'Teknologi',
            'konten' => 'PT LG Electronics Indonesia (LG) mengumumkan pencapaian tingkat komponen dalam negeri (TKDN) untuk dua kategori produk dari lini bisnis digital display',
            'penulis' => 'Dok LG',
        ]);
        Artikel::insert([
            'judul' => 'Pemilu Indonesia',
            'foto' => 'http://1.bp.blogspot.com/-zHXsuAwbmdE/Usr4QgY1Z9I/AAAAAAAAAac/oZX3D2xnOmM/s1600/Pemenang-II+Flyer.jpg',
            'kategori' => 'Politik',
            'konten' => 'Lebih dari 200 juta pemilih di dalam negeri dan 1,75 juta diaspora Indonesia di seluruh dunia akan mendatangi tempat pemungutan suara untuk memilih presiden dan wakil presiden berikutnya. Pemilihan legislatif juga akan digelar bersamaan pada hari yang sama.',
            'penulis' => 'News Indonesia',
        ]);
        Artikel::insert([
            'judul' => 'Perkembangan Mobil Listrik',
            'foto' => 'https://id-test-11.slatic.net/p/2c6724e3e446ea9e5586ca2a56d408a9.jpg',
            'kategori' => 'Kendaraan',
            'konten' => 'Posisi Indonesia sebagai penghasil nikel terbesar sangat diuntungkan dengan berkembangnya mobil listrik. Keuntungan itu bisa berlipat seandainya Indonesia mampu mengolahnya menjadi produk akhir berupa baterai.',
            'penulis' => 'Kompas',
        ]);

    }
}
