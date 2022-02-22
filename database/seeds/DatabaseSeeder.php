<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class); //CategorySeeder perlu dijalankan terlebih dahulu karena menjadi referensi Foreign Key dari Products.
        $this->call(ProductSeeder::class); //ProductSeeder dijalankan setelah CategorySeeder karena memiliki Foreign Key ke Categories.
    }
}
