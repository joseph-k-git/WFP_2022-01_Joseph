<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => "Kimia Farma",
            'address' => "Rungkut Madya",
        ]);
        DB::table('suppliers')->insert([
            'name' => "Kalbe Farma",
            'address' => "Jakarta",
        ]);
    }
}
