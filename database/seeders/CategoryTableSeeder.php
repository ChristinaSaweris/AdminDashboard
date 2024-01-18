<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoryRecords = [
            ['parent_id'=>0,'category_name'=>'Clothing','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['parent_id'=>0,'category_name'=>'Electronics','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['parent_id'=>0,'category_name'=>'Applicances','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['parent_id'=>1,'category_name'=>'Men','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['parent_id'=>1,'category_name'=>'Women','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
            ['parent_id'=>1,'category_name'=>'Kids','category_image'=>'','category_discount'=>0,'description'=>'',
                'url'=>'','meta_title'=>'','meta_description'=>'','meta_keywords'=>'','status'=>1],
        ];
        Category::insert($categoryRecords);
    }
}
