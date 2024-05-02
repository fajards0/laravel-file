<?php

namespace Database\Seeders;

use App\Models\MediaFilm;
use Illuminate\Database\Seeder;

class MediaFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'film apa',
            'url_media' => 'https: //www.youtube.com/watch?v=qPN5Zqx6k8E',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'miami',
            'url_media' => 'https: //www.youtube.com/watch?v=hMkMwG5O-9w',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 2,
            'media_title' => 'media A',
            'url_media' => 'https: //www.youtube.com/watch?v=V_gLHxkgeqE',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'media B',
            'url_media' => 'https: //www.youtube.com/@GamingMobileGM',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'media C',
            'url_media' => 'https: //www.youtube.com/watch?v=zoH4zizjLhI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'media D',
            'url_media' => 'https: //www.youtube.com/watch?v=BVa3ZpofFCM',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'media E',
            'url_media' => 'https: //www.youtube.com/watch?v=A5FGq1ClUzE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 2,
            'media_title' => 'media F',
            'url_media' => 'https: //www.youtube.com/watch?v=0p64GBZDHwE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'media G',
            'url_media' => 'https: //www.youtube.com/watch?v=WrtoAkI9mRg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'media H',
            'url_media' => 'https: //www.youtube.com/watch?v=grFElvr5Nrs&t=80s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'media I',
            'url_media' => 'https: //www.youtube.com/watch?v=wmwOv3qR4VA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'media J',
            'url_media' => 'https: //www.youtube.com/watch?v=nmqe9XQuUcA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 2,
            'media_title' => 'media K',
            'url_media' => 'https: //www.youtube.com/watch?v=0szpRuVjIGU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'media L',
            'url_media' => 'https: //www.youtube.com/watch?v=eR0rAhutERg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'media M',
            'url_media' => 'https: //www.youtube.com/watch?v=Xu6M236qX6g',
        ]);

    }
}
