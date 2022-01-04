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
        DB::table('products')->insert([
            ['name'=>'Samsung A50',
            "price"=>"200",
            "description"=>"New Samsung Galaxy A50 4Gb Ram 128Gb Internal Memory 48mp Camera",
            "category"=>"moblie",
            "gallery"=>"https://img.global.news.samsung.com/global/wp-content/uploads/2020/08/%EA%B8%80%EB%A1%9C%EB%B2%8C-Featured-Stories-%EC%83%81%EB%8B%A8%EB%B0%B0%EB%84%88-1000x500-2.jpg"],
            ['name'=>'Poco X3 Gt',
            "price"=>"200",
            "description"=>"New Poco X3 Gt",
            "category"=>"moblie",
            "gallery"=>"https://i01.appmifile.com/webfile/globalimg/products/pc/poco-x3-gt/overview01.jpg"],
    
        ]);
    }
}
