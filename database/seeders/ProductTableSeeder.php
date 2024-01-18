<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productsRecords =[
            ['category_id'=>5,'product_name'=>'Jacket','product_description'=>'good','product_image'=>'',
                'product_price'=>'1000', 'product_discount'=>'10',
                'product_final_price'=>'900','status'=>1],
            ['category_id'=>4,'product_name'=>'Tshirt','product_description'=>'good','product_image'=>'',
                'product_price'=>'1000', 'product_discount'=>'10',
                'product_final_price'=>'900','status'=>1],
            ['category_id'=>5,'product_name'=>'Jacket','product_description'=>'good','product_image'=>'',
                'product_price'=>'1000', 'product_discount'=>'10',
                'product_final_price'=>'900','status'=>1],
            ['category_id'=>6,'product_name'=>'Jacket','product_description'=>'good','product_image'=>'',
                'product_price'=>'1000', 'product_discount'=>'10',
                'product_final_price'=>'900','status'=>1],
        ];
        Product::insert($productsRecords);

    }
}
