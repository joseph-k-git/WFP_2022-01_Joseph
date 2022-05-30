<?php

use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buyers')->insert([
            'name' => "Joseph",
            'address' => "Surabaya",
        ]);
        DB::table('buyers')->insert([
            'name' => "Kristiano",
            'address' => "Sidoarjo",
        ]);
    }
}
