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
            'url_media' => 'https://youtu.be/rMn8-Qa5XjQ?si=vA0VoQMHnK9YRuUb',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'miami',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.KHTkaOofkiyrcZoXcUlLHgHaFS&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'media A',
            'url_media' => 'https://www.youtube.com/watch?v=V_gLHxkgeqE',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'media B',
            'url_media' => 'https://tse1.mm.bing.net/th?id=OIP.U00zGlQWYwmnlX1oLvz7eAAAAA&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'media C',
            'url_media' => 'https://www.youtube.com/watch?v=zoH4zizjLhI',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'media D',
            'url_media' => 'https://www.youtube.com/watch?v=BVa3ZpofFCM',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'media E',
            'url_media' => 'https://cdn.idntimes.com/content-images/post/20230517/rizkyridhoramadhani-347076200-556022146688735-9107025040918080457-n-6a30a7a53b62191b4473e5acd258224d_600x400.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'media F',
            'url_media' => 'https://www.youtube.com/watch?v=0p64GBZDHwE',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'media G',
            'url_media' => 'https://tse2.mm.bing.net/th?id=OIP.sWFnT_vFa4rHjIcnIgcFpQHaEK&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'media H',
            'url_media' => 'https://www.youtube.com/watch?v=grFElvr5Nrs&t=80s',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'media I',
            'url_media' => 'https://www.youtube.com/watch?v=wmwOv3qR4VA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'media J',
            'url_media' => 'https://cdn.idntimes.com/content-images/post/20190204/atta1-8e884ac91891b7f9915bbb5cae5ceb95.jpg',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'media K',
            'url_media' => 'https://www.youtube.com/watch?v=0szpRuVjIGU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'media L',
            'url_media' => 'https://tse3.mm.bing.net/th?id=OIP.QkiF-UN-C3lPJ-zlmJpKUQHaHd&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'media M',
            'url_media' => 'https://www.youtube.com/watch?v=Xu6M236qX6g',
        ]);

    }
}
