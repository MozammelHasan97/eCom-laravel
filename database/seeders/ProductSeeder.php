<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        	[
        		'name'=>'Oppo Mobile',
        		'price'=>'45000',
        		'category'=>'mobile',
        		'gallery'=>'https://images.app.goo.gl/5aog8RWpNNuAgXNs9',
        		'description'=>'a mobile with 8gb ram and much more feature'
        	],
        	[
        		'name'=>'Panasonic Smart TV',
        		'price'=>'70000',
        		'category'=>'TV',
        		'gallery'=>'https://images.app.goo.gl/urVgD4ByXaGZ5bC19',
        		'description'=>'a smart tv with much more feature'
        	],
        	[
        		'name'=>'Samsung Smart TV',
        		'price'=>'90000',
        		'category'=>'TV',
        		'gallery'=>'https://images.app.goo.gl/qwD6YoYuPLhES3nB7',
        		'description'=>'a smart tv with much more feature'
        	],
        	[
        		'name'=>'Walton Refrigerator',
        		'price'=>'75000',
        		'category'=>'Reprigerator',
        		'gallery'=>'https://images.app.goo.gl/wrSPykyHqq1Y2tvk7',
        		'description'=>'a refrigerator with 100% copper condensers and Nano technology'
        	]
        ]);
    }
}
