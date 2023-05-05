<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-19',
            'user_id'=>'1',
            'product_id'=>'10'
        ]);
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-20',
            'user_id'=>'1',
            'product_id'=>'4'
        ]);
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-21',
            'user_id'=>'1',
            'product_id'=>'7'
        ]);
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-18',
            'user_id'=>'2',
            'product_id'=>'1'
        ]);
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-19',
            'user_id'=>'2',
            'product_id'=>'9'
        ]);
        DB::table('transaction')->insert([
            'quantity'=>'1',
            'date'=>'2023-04-21',
            'user_id'=>'2',
            'product_id'=>'2'
        ]);
    }
}

