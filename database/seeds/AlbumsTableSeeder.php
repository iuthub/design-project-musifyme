<?php

use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albums')->insert([
            'name' => 'Highway to Hell',
            'photo' => 'Highway to Hell.jpg',
            'artist_id' => 2,
        ]);
        
        DB::table('albums')->insert([
            'name' => 'Back in Black',
            'photo' => 'Back in Black.jpg',
            'artist_id' => 2,
        ]);
         
        DB::table('albums')->insert([
            'name' => 'Back to Basics',
            'photo' => 'Back to Basics.jpg',
            'artist_id' => 1,
        ]);
    }
}
