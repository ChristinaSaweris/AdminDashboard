<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class ProductsTable extends Component
{
    use WithPagination;
    public $search = "";
    public function render()
    {
        $products = Product::with('category')
            ->where('product_name','like','%'.$this->search.'%')->paginate(5);
        return view('livewire.products-table', ['products'=>$products]);
    }
}
