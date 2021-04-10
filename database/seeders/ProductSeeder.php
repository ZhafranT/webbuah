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
            [
                'name'=>'jeruk',
                "price"=>"20.000",
                "category"=>"buah",
                "description"=>"buah terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10100200003.jpg"
    
            ],
            [
                'name'=>'anggur',
                "price"=>"15.000",
                "category"=>"buah",
                "description"=>"buah terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/20000200007.jpg"
    
            ],
            [
                'name'=>'apel',
                "price"=>"17.000",
                "category"=>"buah",
                "description"=>"buah terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/20000300009.jpg"
    
            ],
            [
                'name'=>'mangga',
                "price"=>"25.000",
                "category"=>"buah",
                "description"=>"buah terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/20002300008.jpg"
    
            ],
            [
                'name'=>'Pear Golden',
                "price"=>"23.000",
                "category"=>"buah",
                "description"=>"buah terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/20001600002.jpg"
    
            ],
            [
                'name'=>'Buncis',
                "price"=>"11.000",
                "category"=>"Sayuran",
                "description"=>"Sayur terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10000600001.jpg"
    
            ],
            [
                'name'=>'Kacang Panjang',
                "price"=>"8.000",
                "category"=>"Sayuran",
                "description"=>"Sayur terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10001800001.jpg"
    
            ],
            [
                'name'=>'Kentang',
                "price"=>"18.000",
                "category"=>"Sayuran",
                "description"=>"Sayur terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10002300002.jpg"
    
            ],
            [
                'name'=>'Kubis',
                "price"=>"15.000",
                "category"=>"Sayuran",
                "description"=>"Sayur terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10002400001.jpg"
    
            ],
            [
                'name'=>'Bawang Bombay',
                "price"=>"15.000",
                "category"=>"Sayuran",
                "description"=>"Sayur terbaik dengan teknologi terkini",
                "gallery"=>"https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/products/10000100001.jpg"
    
            ],            
        ]);
    }
}
