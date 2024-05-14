<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::insert([
            'title' => 'Toy Story 1',
            'description' => 'A cowboy doll is profoundly threatened and jealous when a new spaceman action figure supplants him as top toy in a boys bedroom.',
            'cover_url' => 'https://media.s-bol.com/7vDW6qyWxzA/550x833.jpg',
            'trailer_url' => 'https://www.imdb.com/video/vi2052129305/?playlistId=tt0114709&ref_=tt_ov_vi',
            'viewer' => '540000',
        ]);
        Movie::insert([
            'title' => 'Toy Story 2',
            'description' => 'When Woody is stolen by a toy collector, Buzz and his friends set out on a rescue mission to save Woody before he becomes a museum toy property with his roundup gang Jessie, Prospector, and Bullseye.',
            'cover_url' => 'https://picfiles.alphacoders.com/152/152486.jpg',
            'trailer_url' => 'https://www.imdb.com/video/vi2052129305/?playlistId=tt0120363&ref_=tt_ov_vi',
            'viewer' => '980000',
        ]);
        Movie::insert([
            'title' => 'Toy Story 3',
            'description' => 'The toys are mistakenly delivered to a day-care center instead of the attic right before Andy leaves for college, and its up to Woody to convince the other toys that they werent abandoned and to return home.',
            'cover_url' => 'https://thedigitalmovies.com/wp-content/uploads/2023/10/jSzisjO4vcE0dxuzfsl979HIwmS-600x900.jpg',
            'trailer_url' => 'https://www.imdb.com/video/vi3676898329/?playlistId=tt0435761&ref_=tt_ov_vi',
            'viewer' => '779000',
        ]);
        Movie::insert([
            'title' => 'Toy Story 4',
            'description' => 'When a new toy called "Forky" joins Woody and the gang, a road trip alongside old and new friends reveals how big the world can be for a toy.',
            'cover_url' => 'https://moviereelist.com/wp-content/uploads/2019/09/toy-story-4-retail-poster.jpg',
            'trailer_url' => 'https://www.imdb.com/video/vi1497349145/?playlistId=tt1979376&ref_=tt_pr_ov_vi',
            'viewer' => '5233000',
        ]);
    }
}
