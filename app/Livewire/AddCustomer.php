<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;


class AddCustomer extends Component
{
    public $name;
    public $phone;
    public $address;

    public function createNewCustomer(){
        Customer::create([
            'customer_name'=>$this->name,
            'customer_phone'=>$this->phone,
            'customer_address'=>$this->address,
        ]);
        return redirect()->to('admin\customers')->with('success_message', "Customer has been Added Successfully!");
    }

    public function render()
    {
        return view('livewire.add-customer');
    }
}
