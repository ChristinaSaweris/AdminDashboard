<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use App\Models\Order;

class CustomersTable extends Component
{
    use WithPagination;
    public $search = "";

    public function showCustomers(){

        return view('admin.customers.view_customers');
    }

    public function delete($customerID){
        Order::find($customerID)->delete();
        Customer::find($customerID)->delete();
    }

    public function addCustomerView(){
        return view('admin.customers.add_customer');
    }

    public function render()
    {

        $customers = Customer::where('customer_name','like','%'.$this->search.'%')->paginate(10);
        return view('livewire.customers-table',['customers'=>$customers]);
    }
}
