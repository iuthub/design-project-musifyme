<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'user1',
            'name' => 'User One',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'email' => 'user2',
            'name' => 'User Two',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'email' => 'admin',
            'name' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
