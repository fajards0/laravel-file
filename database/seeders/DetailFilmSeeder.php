<?php

namespace Database\Seeders;

use App\Models\DetailFilm;
use Illuminate\Database\Seeder;

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
            'code_film' => 'tt4154664',
            'url_imdb' => 'https://www.imdb.com/title/tt4154664/?ref_=fn_al_tt_1',
        ]);
        DetailFilm::insert([
            'film_id' => 2,
            'code_film' => 'tt10872600',
            'url_imdb' => 'https://www.imdb.com/title/tt10872600/?ref_=fn_al_tt_3',
        ]);
        DetailFilm::insert([
            'film_id' => 3,
            'code_film' => 'tt11981568',
            'url_imdb' => 'https://www.imdb.com/title/tt11981568/?ref_=fn_al_tt_5',
        ]);
        DetailFilm::insert([
            'film_id' => 4,
            'code_film' => 'tt3921314',
            'url_imdb' => 'https://www.imdb.com/title/tt3921314/?ref_=nv_sr_srsg_6_tt_3_nm_5_q_muhammad',
        ]);

    }
}
