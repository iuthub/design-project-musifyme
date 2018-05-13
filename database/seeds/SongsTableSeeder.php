<?php

use Illuminate\Database\Seeder;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'name' => 'Highway to Hell',
            'song' => 'Highway to Hell.mp3',
            'photo' => 'Highway to Hell.jpg',
            'rate' => 3,
            'duration' => 208,
            'genre_id' => 1,
            'artist_id' => 2,
            'album_id'=> 1,
        ]);
        
         DB::table('songs')->insert([
            'name' => 'Candyman',
            'song' => 'Candyman.mp3',
            'photo' => 'Candyman.jpg',
            'rate' => 2,
            'duration' => 194,
            'genre_id' => 2,
            'artist_id' => 1,
            'album_id'=> 3,
        ]);
    }
}
