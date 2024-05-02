<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Film;

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
            'judul' => 'Jumanji',
            'deskripsi' => 'lorem ipmsum.....'
        ]);
        Film::insert([
            'judul' => 'Pake Mata',
            'deskripsi' => 'lorem ipmsum.....'
        ]);
        Film::insert([
            'judul' => 'Jumanji 2',
            'deskripsi' => 'lorem ipmsum.....'
        ]);

    }
}
