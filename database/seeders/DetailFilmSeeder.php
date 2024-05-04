<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DetailFilm;

class DetailFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilm::insert([
            'film_id' => 1,
            'code_film' => 'tt11389872',
            'url_imdb' => 'https://www.imdb.com/title/tt11389872/?ref_=vp_vi_tt_p'
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt32205396',
            'url_imdb' => 'https://www.imdb.com/title/tt32205396/?ref_=vp_vi_tt'
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt13186482',
            'url_imdb' => 'https://www.imdb.com/title/tt13186482/?ref_=vp_vi_tt'
        ]);

    }
}
