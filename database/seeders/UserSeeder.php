<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name'=>'Mr. Vico Lomar',
            'loyalty'=>'Gold',
            'star'=>20
        ]);
        DB::table('user')->insert([
            'name'=>'Ms. Fei Fei Li',
            'loyalty'=>'Green',
            'star'=>20
        ]);
    }
}
