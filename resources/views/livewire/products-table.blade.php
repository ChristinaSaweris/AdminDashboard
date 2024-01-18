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
            <th>category</th>
            <th>Parent category</th>
            <th>product_price</th>
            <th>product_discount</th>
            <th>product_final_price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->category->category_name }}</td>
                <td>
                    @if(isset($product->category->parent_category->category_name))
                        {{ $product->category->parent_category->category_name }}
                    @endif
                </td>
                <td>{{ $product->product_price }}</td>
                <td>{{ $product->product_discount }}</td>
                <td>{{ $product->product_final_price }}</td>
                <td>
                    @if($product->status ==1)
                        <div class="form-check form-switch" style="display: inline-table">
                            <input class="form-check-input" type="checkbox" onclick="updateProductStatus({{ $product->id }})" id="product-{{ $product->id }}"  checked="">
                        </div>
                    @else
                        <div class="form-check form-switch" style="display: inline-table">
                            <input class="form-check-input" type="checkbox" onclick="updateProductStatus({{ $product->id }})" id="product-{{ $product->id }}" >
                        </div>
                    @endif&nbsp;
                    <a href="{{ url('admin/delete_product/'.$product->id) }}" id="deletePost">
                        <i class="fas fa-regular fa-trash-can" style="color: #3f6ed3"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{ $products->links() }}
    </div>
</div>
