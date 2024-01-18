<div>
    <div id="search-bar">
        <form class="d-flex justify-content-end" role="search">
            <div class="col-auto">
                <input wire:model.live="search" type="search" name="search" id="search" class="form-control" placeholder="Search">
            </div>
        </form>
    </div>
    <table id="example" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>product_name</th>
            <th>customer_name</th>
            <th>Amount</th>
            <th>final price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    @if($order->product)
                        {{ $order->product->product_name }}
                    @endif
                </td>
                <td>
                    @if($order->customer)
                        {{ $order->customer->customer_name }}
                    @endif
                </td>
                <td>{{ $order->amount }}</td>
                <td>{{ $order->final_price }}</td>
                <td>
                    <button wire:click="delete({{ $order-> id }})" class=" btn btn-danger text-sm text-red-500 font-semibold
                    rounded hover:text-teal-800 mr-1">delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $orders->links() }}
    </div>
</div>
