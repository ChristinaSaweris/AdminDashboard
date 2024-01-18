<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;

class OrdersTable extends Component
{
    use WithPagination;
    public $search = "";

    public function showOrders(){
        return view('admin.orders.view_orders');

    }

    public function delete($orderID){
        Order::find($orderID)->delete();
    }

    public function addOrderView(){
        return view('admin.orders.add_order');
    }

    public function render()
    {
        $orders = Order::with('customer','product')
            //search with a column name from the relation ;)
            ->whereHas('customer', function ($query){
                $query->where('customer_name','like','%'.$this->search.'%');
            })->paginate(10);
        return view('livewire.orders-table', ['orders'=>$orders]);
    }
}
