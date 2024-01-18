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
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Created on</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->customer_name }}</td>
                <td>{{ $customer->customer_phone }}</td>
                <td>{{ $customer->customer_address }}</td>
                <td>{{ date("F j, Y, g:i a",strtotime($customer->created_at)) }}</td>
                <td>
                    <button wire:click="delete({{ $customer-> id }})" class=" btn btn-danger text-sm text-red-500 font-semibold
                    rounded hover:text-teal-800 mr-1">delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $customers->links() }}
    </div>
</div>
