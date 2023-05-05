<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            'name'=>'BisEspresso',
            'price'=>'29000',
            'category'=>'Basic'
        ]);
        DB::table('product')->insert([
            'name'=>'BisAmericano',
            'price'=>'25000',
            'category'=>'Basic'
        ]);
        DB::table('product')->insert([
            'name'=>'BisLatte',
            'price'=>'27000',
            'category'=>'Basic'
        ]);
        DB::table('product')->insert([
            'name'=>'BisCappucino',
            'price'=>'30000',
            'category'=>'Signature'
        ]);
        DB::table('product')->insert([
            'name'=>'BisDalgona',
            'price'=>'32000',
            'category'=>'Signature'
        ]);
        DB::table('product')->insert([
            'name'=>'BisMocca',
            'price'=>'35000',
            'category'=>'Cream'
        ]);
        DB::table('product')->insert([
            'name'=>'BisGlaze',
            'price'=>'34000',
            'category'=>'Cream'
        ]);
        DB::table('product')->insert([
            'name'=>'BisGreen Tea',
            'price'=>'25000',
            'category'=>'Tea'
        ]);
        DB::table('product')->insert([
            'name'=>'BisOolong Tea',
            'price'=>'25000',
            'category'=>'Tea'
        ]);
        DB::table('product')->insert([
            'name'=>'BisMatcha',
            'price'=>'26000',
            'category'=>'Tea'
        ]);
        DB::table('product')->insert([
            'name'=>'BisBlack Tea',
            'price'=>'25000',
            'category'=>'Tea'
        ]);
    }
}
