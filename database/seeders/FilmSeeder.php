<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'Captain Marvel',
            'deskripsi' => 'Carol Danvers becomes one of the universes most powerful heroes when Earth is caught in the middle of a galactic war between two alien races',
        ]);
        Film::insert([
            'judul' => 'Spider-Man',
            'deskripsi' => 'With Spider-Mans identity now revealed, Peter asks Doctor Strange for help. When a spell goes wrong, dangerous foes from other worlds start to appear, forcing Peter to discover what it truly means to be Spider-Man',
        ]);
        Film::insert([
            'judul' => 'Cars on the road',
            'deskripsi' => 'Lightning McQueen and Mater go on a cross-country road trip to see Maters sister',
        ]);
        Film::insert([
            'judul' => 'Muhammad : The Messenger Of God',
            'deskripsi' => 'The events, trials and tribulations of the city of Makkah in 7th century AD',
        ]);

    }
}
