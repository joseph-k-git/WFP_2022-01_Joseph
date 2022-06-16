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
            'password' => Hash::make('adminadmin'), // https://laravel.com/docs/7.x/hashing
            'sebagai' => 'owner',
        ]);
        DB::table('users')->insert([
            'name' => 'Pegawai Satu', //Str::random(10), // Random string with length of 10 characters.
            'email' => 'pegawai1'.'@gmail.com',
            'password' => Hash::make('pegawaipegawai1'), // https://laravel.com/docs/7.x/hashing
            'sebagai' => 'pegawai',
        ]);
        DB::table('users')->insert([
            'name' => 'Pegawai Dua',
            'email' => 'pegawai2'.'@gmail.com',
            'password' => Hash::make('pegawaipegawai2'), // https://laravel.com/docs/7.x/hashing
            'sebagai' => 'pegawai',
        ]);
    }
}
