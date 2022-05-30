<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin".'@gmail.com',
            'password' => Hash::make('password'), // https://laravel.com/docs/7.x/hashing
        ]);
        DB::table('users')->insert([
            'name' => Str::random(10), // Random string with length of 10 characters.
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'), // https://laravel.com/docs/7.x/hashing
        ]);
    }
}
