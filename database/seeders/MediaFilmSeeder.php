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
            'media_title' => 'Captain 1',
            'url_media' => 'https://www.youtube.com/embed/JL9kkp2HUJc?si=s4tR_Cv8fNvWzS9R',
        ]);

        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Captain 2',
            'url_media' => 'https://www.youtube.com/embed/JL9kkp2HUJc?si=s4tR_Cv8fNvWzS9R',
        ]);

        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 1,
            'media_title' => 'Captain 3',
            'url_media' => 'https://www.youtube.com/embed/JL9kkp2HUJc?si=s4tR_Cv8fNvWzS9R',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Captain 4',
            'url_media' => 'https://tse2.mm.bing.net/th?id=OIP.oQDEaarsv7_OlzcS6Ny6agHaEK&pid=Api&P=0&h=220',
        ]);

        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Captain 5',
            'url_media' => 'https://tse1.mm.bing.net/th?id=OIP.vwW_DIh9DUKVR-425s1srgHaEK&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 1,
            'media_type' => 0,
            'media_title' => 'Captain 6',
            'url_media' => 'https://tse3.mm.bing.net/th?id=OIP.obKMp6JB9usHZSmQ4j1g_AHaEK&pid=Api&P=0&h=220',
        ]);

        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Spider 1',
            'url_media' => 'https://www.youtube.com/embed/R5mB0suWT7o?si=ZBU6CvEx21YiBC4h',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Spider 2',
            'url_media' => 'https://www.youtube.com/embed/ioeoCbDiMvE?si=eA0Xj64udguLctDB',

        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 1,
            'media_title' => 'Spider 3',
            'url_media' => 'https://www.youtube.com/embed/Mdx2ZpFgs3Q?si=-CO6sLTFdS5avIKa',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Spider 4',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.w2fEn9gtVMEiKR3sdUQxLQHaHa&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Spider 5',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.BDjOz3weIp53GhcQFbRhegHaEK&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 2,
            'media_type' => 0,
            'media_title' => 'Spider 6',
            'url_media' => 'https://tse3.mm.bing.net/th?id=OIP.5T36xJN5j7JsC4nLdel78gHaEK&pid=Api&P=0&h=220',
        ]);

        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Cars 1',
            'url_media' => 'https://www.youtube.com/watch?v=wmwOv3qR4VA',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Cars 2',
            'url_media' => 'https://www.youtube.com/watch?v=Xu6M236qX6g',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 1,
            'media_title' => 'Cars 3',
            'url_media' => 'https://www.youtube.com/watch?v=0szpRuVjIGU',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Cars 4',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.UBoVtjaL1SUX5RcO-ZmX0wHaFj&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Cars 5',
            'url_media' => 'https://tse3.mm.bing.net/th?id=OIP.shnm4VGOTmnieYKnLQDrJgHaEo&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 3,
            'media_type' => 0,
            'media_title' => 'Cars 6',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.w4zLvdtlniAVhqzXA5C4pgHaFj&pid=Api&P=0&h=220',
        ]);

        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 1,
            'media_title' => 'Messenger 1',
            'url_media' => 'https://www.youtube.com/embed/RSkT1Wb0plE?si=cZFjkQ_-_VUz8nd4',
        ]);
        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 1,
            'media_title' => 'Messenger 2',
            'url_media' => 'https://www.youtube.com/embed/KLqzfsR30bA?si=Y92ApDNUji89F-g2',
        ]);
        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 1,
            'media_title' => 'Messenger 3',
            'url_media' => 'https://www.youtube.com/embed/lVwksp-ITpM?si=Y-8K58rc0ONGPNl_',
        ]);
        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 0,
            'media_title' => 'Messenger 4',
            'url_media' => 'https://tse1.mm.bing.net/th?id=OIP.qXGiCuP7ektI85hXRkhU1wHaE6&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 0,
            'media_title' => 'Messenger 5',
            'url_media' => 'https://tse4.mm.bing.net/th?id=OIP.1XY6CxcdnW8Xkx0FWlKggAHaE6&pid=Api&P=0&h=220',
        ]);
        MediaFilm::insert([
            'film_id' => 4,
            'media_type' => 0,
            'media_title' => 'Messenger 6',
            'url_media' => 'https://tse2.mm.bing.net/th?id=OIP.TL6cVqLlNZ176SBn0qFjhQHaFS&pid=Api&P=0&h=220',
        ]);

    }
}
