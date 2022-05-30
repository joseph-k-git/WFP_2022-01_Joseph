<?php

use Illuminate\Database\Seeder;

class MedicineTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "1",
            'medicine_id' => "1",
            'quantity' => 2,
            'price' => 10000,
        ]);
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "1",
            'medicine_id' => "8",
            'quantity' => 1,
            'price' => 17500,
        ]);
        
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "2",
            'medicine_id' => "3",
            'quantity' => 3,
            'price' => 8000,
        ]);
        
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "3",
            'medicine_id' => "10",
            'quantity' => 2,
            'price' => 16500,
        ]);
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "3",
            'medicine_id' => "12",
            'quantity' => 4,
            'price' => 12250,
        ]);
        DB::table('medicine_transaction')->insert([
            'transaction_id' => "3",
            'medicine_id' => "14",
            'quantity' => 1,
            'price' => 25250,
        ]);
    }
}
