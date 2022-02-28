<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Alat Kesehatan',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANALGESIK NARKOTIK',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANALGESIK NON NARKOTIK',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANTIPIRAI',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'NYERI NEUROPATIK',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANESTETIK LOKAL',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANESTETIK UMUM dan OKSIGEN',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'KHUSUS',
        ]);
        DB::table('categories')->insert([
            'category_name' => 'UMUM',
        ]);
    }
}
