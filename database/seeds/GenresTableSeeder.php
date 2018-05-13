<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'name' => 'rock',
            'description' => 'somethingsomethingsomethingsomethingsomething',
            'photo' => 'rock.jpg'
        ]);
        
        DB::table('genres')->insert([
            'name' => 'blues',
            'description' => 'somethingsomethingsomethingsomethingsomething111',
            'photo' => 'blues.jpg'
        ]);
    }
}
