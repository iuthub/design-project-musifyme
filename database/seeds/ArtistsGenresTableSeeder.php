<?php

use Illuminate\Database\Seeder;

class ArtistsGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artist_genre')->insert([
            'genre_id' => 2,
            'artist_id' => 1,
        ]);
        
        DB::table('artist_genre')->insert([
            'genre_id' => 1,
            'artist_id' => 2,
        ]);
        
         DB::table('artist_genre')->insert([
            'genre_id' => 2,
            'artist_id' => 2,
        ]);
    }
}
