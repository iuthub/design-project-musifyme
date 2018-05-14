<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'name' => 'Christina Aguilera',
            'biography' => 'SomethingSomethingSomething',
            'photo' => '1.jpg',
            'quote' => 'Something',
        ]);
        
         DB::table('artists')->insert([
            'name' => 'AC/DC',
            'biography' => 'SomethingSomethingSomething12345',
            'photo' => '2.jpg',
            'quote' => 'Something:Something',
        ]);
    }
}
