<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1
        DB::table('kategoris')->insert([
            'name' => 'ANALGESIK NARKOTIK',
            'description' => ''
        ]);
        //2
        DB::table('kategoris')->insert([
            'name' => 'ANALGESIK NON NARKOTIK',
            'description' => ''
        ]);
        //3
        DB::table('kategoris')->insert([
            'name' => 'ANTIPIRAI',
            'description' => ''
        ]);
        //4
        DB::table('kategoris')->insert([
            'name' => 'NYERI NEUROPATIK',
            'description' => ''
        ]);
        //5
        DB::table('kategoris')->insert([
            'name' => 'ANESTETIK LOKAL',
            'description' => ''
        ]);
        //6
        DB::table('kategoris')->insert([
            'name' => 'ANESTETIK UMUM dan OKSIGEN',
            'description' => ''
        ]);
        //7
        DB::table('kategoris')->insert([
            'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
            'description' => ''
        ]);
        //8
        DB::table('kategoris')->insert([
            'name' => 'ANTIALERGI dan OBAT untuk ANAFILAKSIS',
            'description' => ''
        ]);
        //9
        DB::table('kategoris')->insert([
            'name' => 'KHUSUS',
            'description' => ''
        ]);
        //10
        DB::table('kategoris')->insert([
            'name' => 'UMUM',
            'description' => ''
        ]);
    }
}
