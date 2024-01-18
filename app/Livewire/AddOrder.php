<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use App\Models\Customer;

class AddOrder extends Component
{
    public $customer_id;
    public $product_id;
    public $amount;
    public $final_price;
    public $product_final_price;
    public $Product_discount;
    public $product;
    public $product_price;


    public function render()
    {
        return view('livewire.add-order', [
            'products' => Order::getProductsList(),
            'product_id' => $this->product_id,
            'customers'=>Customer::all(),
            'customer_id'=>$this->customer_id,
        ]);
    }

    public function createNewOrder(){
        Order::create([
            'customer_id' => $this->customer_id,
            'product_id' => $this->product_id,
            'amount' => $this->amount,
            'final_price' => $this->final_price,
        ]);
        return redirect()->to('admin\orders')->with('success_message', "Order has been Added Successfully!");

    }

    public function getProductAmount(){
        $this->final_price =  $this->product_final_price * $this->amount;
    }

    public function getProductInfo()
    {
//        dd($this->product_id);
        // Fetch the selected product and update the selectedProduct property
        $product =  Order::getProductById($this->product_id);
//        dd($product);
        $this->product_price = $product['product_price'];
        $this->Product_discount = $product['product_discount'];
        $this->product_final_price = $product['product_final_price'];
    }




}
