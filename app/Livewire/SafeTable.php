<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use App\Models\Safe;

class SafeTable extends Component
{
    use WithPagination;
    public $search = "";

    public function showSafe(){
        return view('admin.safe.view_safe');
    }

    public function delete($orderID){
        Safe::find($orderID)->delete();
    }

    public function render()
    {
        $orders = Order::with('safe','customer')
            ->whereHas('customer', function ($query){
            $query->where('customer_name','like','%'.$this->search.'%');
            })->paginate(10);
//        dd($orders);
        return view('livewire.safe-table', ['orders'=>$orders]);
    }
}
