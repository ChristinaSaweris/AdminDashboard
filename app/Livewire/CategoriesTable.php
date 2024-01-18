<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class CategoriesTable extends Component
{
    use WithPagination;

    public $search = "";
    public function render()
    {
        $categories = Category::with('parentCategory')
            ->where('category_name','like','%'.$this->search.'%')->paginate(10);
//        dd($categories);
        return view('livewire.categories-table',['categories'=>$categories]);
    }
}
