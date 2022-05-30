<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'buyer_id' => "1",
            'user_id' => "1",
            'transaction_date' => date("2022-04-13 09:45:00"),
        ]);
        DB::table('transactions')->insert([
            'buyer_id' => "2",
            'user_id' => "1",
            'transaction_date' => date("2022-04-13 10:50:15"),
        ]);
        DB::table('transactions')->insert([
            'buyer_id' => "1",
            'user_id' => "1",
            'transaction_date' => date("2022-04-13 11:55:30"),
        ]);
    }
}
