<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function parentCategory(){
      return $this->hasOne('App\Models\Category','id','parent_id')
          ->select('id', 'category_name')
          ->where('status',1);
    }

    public function subCategories(){
       return $this->hasMany('App\Models\Category','parent_id')->where('status',1);
    }

    public static function getCategories(){
        $categories = Category::with('subCategories')->where('parent_id',0)->
        where('status',1)->get()->toArray();
//        dd($categories);
        return $categories;
    }
}
